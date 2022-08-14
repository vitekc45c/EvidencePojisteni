/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Other/SQLTemplate.sql to edit this template
 */
/**
 * Author:  admin
 * Created: 28. 7. 2022
 */

CREATE TABLE IF NOT EXISTS `client` (
  `clientID` varchar(50) NOT NULL AUTO_INCREMENT,
  `firstName` varchar(50) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `phoneNumber` int(12) NOT NULL,
  `city` varchar(50) NOT NULL,
  `postalCode` varchar(50) NOT NULL,
  PRIMARY KEY (`client_id`)
)