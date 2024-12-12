@extends('layouts.template_three')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error Page</title>
    <!-- Bootstrap 4 CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Custom Error Page Styles */
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            margin: 0;
            background-color: #f8f9fa; /* Light background */
        }

        .error-container {
            text-align: center;
            padding: 40px;
            border: 1px solid #dee2e6;
            border-radius: 10px;
            background-color: #fff;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .error-code {
            font-size: 96px;
            font-weight: bold;
            color: #dc3545; /* Bootstrap danger color */
        }

        .error-message {
            font-size: 24px;
            font-weight: 500;
            color: #6c757d; /* Bootstrap muted text */
        }

        .error-description {
            font-size: 16px;
            color: #6c757d;
            margin-bottom: 30px;
        }

        .btn-home {
            color: #fff;
            background-color: #007bff; /* Bootstrap primary color */
            border-color: #007bff;
            padding: 10px 20px;
            border-radius: 5px;
        }

        .btn-home:hover {
            background-color: #0056b3;
            border-color: #004085;
        }
    </style>
</head>
<body>
    <div class="error-container">
        <div class="error-code">ERROR</div>
        <div class="error-message">User Not Logged in</div>
        <p class="error-description">
            Sorry, to access this page you need to register or login. <br>
        </p>
        <div class="row">
            <div class="col-md-6">
                <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="bottom" title="Create an account."><a href="/login" class="btn btn-danger">To Login Page</a></button>
            </div>
            <div class="col-md-6">
                <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="bottom" title="Login to an existing account."><a href="/" class="btn btn-danger">To Register Page</a></button>
            </div>
        </div>
    </div>

    <!-- Bootstrap 4 JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.4.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
</body>
</html>
