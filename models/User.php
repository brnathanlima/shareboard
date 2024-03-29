<?php
class UserModel extends Model
{
    public function register()
    {
        $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        
        $password = md5($post['password']);

        if ($post['submit']) {
            if ($post['name'] == '' || $post['name'] == '' || $post['name'] == '') {
                Message::setMsg('Please fill in all fields', 'error');
                return;
            }
            $this->query('INSERT INTO users (name, email, password) VALUES(:name, :email, :password)');
            $this->bind(':name', $post['name']);
            $this->bind(':email', $post['email']);
            $this->bind(':password', $password);
            $this->execute();

            if ($this->lastInsertId()) {
                Message::setMsg('User successfuly registered!', 'success');
                header('Location: '.ROOT_URL.'/users/login');
                exit();
            }
        }
        return;
    }

    public function login()
    {
        $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        $password = md5($post['password']);

        if ($post['submit']) {
            $this->query('SELECT * FROM users WHERE email=:email AND password=:password');
            $this->bind(':email', $post['email']);
            $this->bind(':password', $password);
            
            $row = $this->single();

            if ($row) {
                $_SESSION['is_logged_in'] = true;
                $_SESSION['user_data'] = [
                    'id'        => $row['id'],
                    'name'      => $row['name'],
                    'email'     => $row['email']
                ];
                header('Location: '.ROOT_URL.'/shares');
            } else {
                Message::setMsg('Incorrect login', 'error');
            }
        }
    }
}