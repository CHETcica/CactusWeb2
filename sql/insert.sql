INSERT INTO `product` ( `Cac_name`, `Cac_img`, `Cac_Price`, `Cac_Type`, `Cac_Size`, `Cac_Farm`, `Cac_Existing`) VALUES 
( 'mammillaria hahniana','https://cdn.discordapp.com/attachments/792729018608648204/795246843897315359/202007231555384faad443fdb69275458085345da16fa9.jpg', '300', 'mammillaria', '7', 'Oasis farm', '43'), 
( 'Astrophytum asterias super kabuto','https://media.discordapp.net/attachments/792729018608648204/793827941649481778/astrophytum_asterias_super_kabuto_02.jpg?width=697&height=469', '100', 'Astrophytum', '5', 'Oasis farm', '20');



CREATE TABLE Basket(
    `BasketID` int(3) NOT NULL AUTO_INCREMENT,
    `Amout` int(10)NOT NULL,
    `Sumprice` int(10)NOT NULL,
    `StatusBK` int(1)NOT NULL,
    `CusID` int(3) NOT NULL,
    `Cac_id` int(11) NOT NULL,
    PRIMARY KEY (BasketID),
    FOREIGN KEY (CusID) REFERENCES customer(CusID),
    FOREIGN KEY (Cac_id) REFERENCES product(Cac_id)
);

INSERT INTO `basket` (`BasketID`, `Amout`, `Sumprice`, `StatusBK`, `CusID`, `Cac_id`) VALUES ('1', '3', '300', '0', '1', '1');

SELECT `BasketID`, `Amout`, `Sumprice`, `StatusBK`, `CusID`, product.Cac_img FROM `basket` INNER JOIN product WHERE product.Cac_id=basket.Cac_id
