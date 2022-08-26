/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Other/SQLTemplate.sql to edit this template
 */
/**
 * Author:  admin
 * Created: 18. 8. 2022
 */

CREATE TABLE IF NOT EXISTS `insurance` (
  `insuranceID` int(50) NOT NULL AUTO_INCREMENT,
  `type` varchar(50) NOT NULL,
  `amount` varchar(50) NOT NULL,
  PRIMARY KEY (`insurance_id`)
)