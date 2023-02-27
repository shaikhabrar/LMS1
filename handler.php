<?php
ini_set('allow_url_fopen',1);
switch(@parse_url($_SERVER['REQUEST_URI'])['path']) {
	case '/LMS1':
		require 'index.php';
        break;
    case '/LMS1/adminlogin.php':
        require 'adminlogin.php';
        break;
    case '/LMS1/signup.php':
            require 'signup.php';
            break;
    case '/LMS1/dashboard.php';
            require 'dashboard.php';
            break;
    case '/LMS1/my-profile.php';
            require 'my-profile.php';
            break;
    case '/LMS1/change-password.php';
            require 'change-password.php';
            break;
    case '/LMS1/issued-books.php';
            require 'issued-books.php';
            break;
    case '/LMS1/request-a-book.php';
            require 'request-a-book.php';
            break;
    case '/LMS1/admin/dashboard.php':
            require __DIR__.'/admin/dashboard.php';
            break;
    case '/LMS1/admin/add-category.php':
            require __DIR__.'/admin/add-category.php';
            break;
    case '/LMS1admin/add-publications.php':
            require __DIR__.'/admin/add-publications.php';
            break;
    case '/LMS1/admin/manage-publications.php':
            require __DIR__.'/admin/manage-publications.php';
            break;
    case '/LMS1/admin/add-book.php':
            require __DIR__.'/admin/add-book.php';
            break;
    case '/LMS1/admin/manage-books.php':
            require __DIR__.'/admin/manage-books.php';
            break;
    case '/LMS1/admin/set-fine.php':
            require __DIR__.'/admin/set-fine.php';
            break;
    case '/LMS1/admin/manage-issued-books.php':
            require __DIR__.'/admin/manage-issued-books.php';
            break;
    case '/LMS1/admin/manage-requested-books.php':
            require __DIR__.'/admin/manage-requested-books.php';
            break;
    case '/LMS1/admin/reg-students.php':
            require __DIR__.'/admin/reg-students.php';
            break;
    case '/LMS1/admin/change-password.php':
            require __DIR__.'/admin/change-password.php';
            break;
    case '/LMS1/admin/issue-book2.php';
            require __DIR__.'/admin/issue-book2.php';
            break;
    case '/LMS1/admin/edit-book.php';
            require __DIR__.'/admin/edit-book.php';
            break;
    

    default:
        http_response_code(404);
        echo @parse_url($_SERVER['REQUEST_URI'])['path'];
        exit('Not Found');
}
?>