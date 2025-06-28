<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - 6xatz</title>
    <link rel="stylesheet" href="<?= base_url("/style.css") ?>">
    <style>
        /* Login specific styles */
        body {
            background: linear-gradient(135deg, var(--bg-color) 0%, #1a1a2e 50%, #16213e 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            padding: 20px;
        }

        #login-wrapper {
            background: var(--surface-color);
            padding: 40px;
            border-radius: 16px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.3);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            width: 100%;
            max-width: 400px;
            animation: fadeInUp 0.6s ease-out;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        #login-wrapper h1 {
            text-align: center;
            margin-bottom: 30px;
            font-size: 2.2rem;
            background: linear-gradient(45deg, var(--accent-color), #03dac6);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            color: var(--text-color);
            font-size: 0.95rem;
        }

        .form-control {
            width: 100%;
            padding: 12px 16px;
            background: var(--card-bg);
            border: 2px solid rgba(255, 255, 255, 0.1);
            border-radius: 8px;
            color: var(--text-color);
            font-size: 1rem;
            transition: all 0.3s ease;
            box-sizing: border-box;
        }

        .form-control:focus {
            outline: none;
            border-color: var(--accent-color);
            box-shadow: 0 0 0 3px rgba(187, 134, 252, 0.1);
            background: var(--surface-color);
        }

        .form-control::placeholder {
            color: rgba(224, 224, 224, 0.6);
        }

        .btn-login {
            width: 100%;
            padding: 14px;
            background: linear-gradient(45deg, var(--accent-color), #3700b3);
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 1.1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            margin-top: 10px;
        }

        .btn-login:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(187, 134, 252, 0.3);
            background: linear-gradient(45deg, #3700b3, var(--accent-color));
        }

        .btn-login:active {
            transform: translateY(0);
        }

        .alert {
            padding: 12px 16px;
            border-radius: 8px;
            margin-bottom: 20px;
            font-weight: 500;
        }

        .alert-danger {
            background: rgba(244, 67, 54, 0.1);
            border: 1px solid rgba(244, 67, 54, 0.3);
            color: #ff6b6b;
        }

        .login-footer {
            text-align: center;
            margin-top: 20px;
            padding-top: 20px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            color: rgba(224, 224, 224, 0.7);
            font-size: 0.9rem;
        }

        .input-icon {
            position: relative;
        }

        .input-icon::before {
            content: '';
            position: absolute;
            left: 12px;
            top: 50%;
            transform: translateY(-50%);
            width: 16px;
            height: 16px;
            background-size: contain;
            opacity: 0.6;
        }

        .username-input::before {
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23e0e0e0' viewBox='0 0 24 24'%3E%3Cpath d='M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z'/%3E%3C/svg%3E");
        }

        .password-input::before {
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23e0e0e0' viewBox='0 0 24 24'%3E%3Cpath d='M18 8h-1V6c0-2.76-2.24-5-5-5S7 3.24 7 6v2H6c-1.1 0-2 .9-2 2v10c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V10c0-1.1-.9-2-2-2zm-6 9c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2zm3.1-9H8.9V6c0-1.71 1.39-3.1 3.1-3.1 1.71 0 3.1 1.39 3.1 3.1v2z'/%3E%3C/svg%3E");
        }

        .input-icon .form-control {
            padding-left: 40px;
        }

        @media (max-width: 480px) {
            #login-wrapper {
                padding: 30px 20px;
                margin: 10px;
            }
            
            #login-wrapper h1 {
                font-size: 1.8rem;
            }
        }
    </style>
  </head>
  <body>
    <div id="login-wrapper">
      <h1>Welcome Back</h1>
      
      <?php if (session()->getFlashdata("flash_msg")): ?>
          <div class="alert alert-danger">
              <?= session()->getFlashdata("flash_msg") ?>
          </div>
      <?php endif; ?>
      
      <form action="" method="post">
        <div class="form-group">
          <label for="InputForUsername" class="form-label">Username</label>
          <div class="input-icon username-input">
            <input type="text" 
                   name="username" 
                   class="form-control" 
                   id="InputForUsername" 
                   placeholder="Enter your username"
                   value="<?= set_value("username") ?>"
                   required>
          </div>
        </div>
        
        <div class="form-group">
          <label for="InputForPassword" class="form-label">Password</label>
          <div class="input-icon password-input">
            <input type="password" 
                   name="password" 
                   class="form-control" 
                   id="InputForPassword"
                   placeholder="Enter your password"
                   required>
          </div>
        </div>
        
        <button type="submit" class="btn-login">
          Sign In
        </button>
      </form>
      
      <div class="login-footer">
        <p>Don't have an account? <a href="#" style="color: var(--accent-color); text-decoration: none;">Contact Admin</a></p>
      </div>
    </div>
  </body>
</html>