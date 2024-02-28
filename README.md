Hello everyone,

I am Rajwardhan Sinha.
Hope this finds you well and good.

Here is a Laravel project to showcase my backend skills.

This project fetches data from local database from routes, controllers, services and repository.

To get started, you shall create database and run the following commands to input data.
Note: Please remember to make changes accordingly in .env file

CREATE TABLE products(
  id BIGINT UNSIGNED AUTO_INCREMENT,
  categoryId BIGINT UNSIGNED,
  name VARCHAR(64),
  price BIGINT UNSIGNED,
  TimeCreated TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  TimeUpdated TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  CONSTRAINT pkproducts PRIMARY KEY (id)
)

INSERT INTO `<dn_name>`.`products` (`categoryId`, `name`, `price`) VALUES (1, 'garnier', '10');
INSERT INTO `<dn_name>`.`products` (`categoryId`, `name`, `price`) VALUES (1, 'nivia', '30');
INSERT INTO `<dn_name>`.`products` (`categoryId`, `name`, `price`) VALUES (1, 'nyka', '50');
INSERT INTO `<dn_name>`.`products` (`categoryId`, `name`, `price`) VALUES (1, 'loreal', '40');
INSERT INTO `<dn_name>`.`products` (`categoryId`, `name`, `price`) VALUES (2, 'horlicks', '50');
INSERT INTO `<dn_name>`.`products` (`categoryId`, `name`, `price`) VALUES (2, 'nescafe', '80');

