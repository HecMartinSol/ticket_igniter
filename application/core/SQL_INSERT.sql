INSERT INTO `tickets_db`.`user_category` (`user_category_id`, `name`, `description`, `is_admin`, `is_operator`, `is_manager`, `level`) VALUES ('1', 'superAdmin', 'Administrador global', '1', '1', '1', '1');

INSERT INTO `tickets_db`.`user` (`user_id`, `user`, `email`, `password`, `user_category_id`) VALUES ('1', 'hecmartinsol', 'hecmartinsol@gmail.com', 'NAN', '1');


select * from user;