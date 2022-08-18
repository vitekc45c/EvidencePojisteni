/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Other/SQLTemplate.sql to edit this template
 */
/**
 * Author:  admin
 * Created: 14. 8. 2022
 */

CREATE TABLE IF NOT EXISTS `users` (
  `userID` varchar(50) NOT NULL AUTO_INCREMENT,
  `userName` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `passwordHash` varchar(50) NOT NULL,
  PRIMARY KEY (`user_id`)
)