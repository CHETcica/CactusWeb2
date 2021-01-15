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






INSERT INTO `product` ( `Cac_name`, `Cac_img`, `Cac_Price`, `Cac_Type`, `Cac_Size`, `Cac_Farm`, `Cac_Existing`) VALUES
( 'gymnocalycium', 'https://discord.com/channels/723792442859716616/723792442859716619/797383479180525578 ', '150', 'gymnocalycium', '5', 'Oasis farm', 100),
( 'gymnocalycium', 'https://discord.com/channels/723792442859716616/723792442859716619/797383493796626453 ', '100', 'gymnocalycium', '6', 'Oasis farm', 200),
( 'gymnocalycium', 'https://discord.com/channels/723792442859716616/723792442859716619/797383497340682240 ', '80', 'gymnocalycium', '5', 'Oasis farm', 200),
( 'astropitum', 'https://discord.com/channels/723792442859716616/723792442859716619/797383777181630475 ', '100', 'astropitum', '6', 'Oasis farm', 100),
( 'astropitum', 'https://cdn.discordapp.com/attachments/723792442859716619/797383778552643584/Astrophytum_asterias_cv._Star_Type_495_l.jpg ', '120', 'astropitum', '5', 'Oasis farm', 100),
( 'astropitum', 'https://cdn.discordapp.com/attachments/723792442859716619/797383778564702268/42047dcbd4da824b.jpg ', '100', 'astropitum', '8', 'Oasis farm', 100),
( 'mammilaria', 'https://discord.com/channels/723792442859716616/723792442859716619/798766296736333825', '120', 'astropitum', '6', 'Oasis farm', 100),
( 'mammilaria', 'https://media.discordapp.net/attachments/723792442859716619/798766318635057163/Screenshot_2021-01-13_110625.png', '150', 'astropitum', '7', 'Oasis farm', 150),
(  'mammilaria', 'https://media.discordapp.net/attachments/723792442859716619/798766321239982130/V036.jpg?width=1015&height=676', '180', 'astropitum', '8', 'Oasis farm', 100),
( 'opuntia', 'https://cdn.discordapp.com/attachments/723792442859716619/798896574825758761/Prickly-pear-cactus-plantlets-paddle.jpg', '100', 'astropitum', '8', 'Oasis farm', 200),
( 'opuntia', 'https://cdn.discordapp.com/attachments/723792442859716619/798896586956341268/24321ca00731a22edec41b617f402a9a.jpg', '120', 'astropitum', '7', 'Oasis farm', 200),
( 'opuntia', 'https://cdn.discordapp.com/attachments/723792442859716619/798896590181761074/02_02_Opuntia_rufida__Purple_variety_2_600px.jpg', '90', 'astropitum', '6', 'Oasis farm', 200),
( 'Echeveria', 'https://cdn.discordapp.com/attachments/723792442859716619/798897824012042240/61_08_04_Echeveria_agavoides_v_Contepec.jpg', '100', 'astropitum', '6', 'Oasis farm', 200),
( 'Echeveria', 'https://cdn.discordapp.com/attachments/723792442859716619/798897830408224788/81dIMXbe2qL._AC_SL1500_.jpg', '100', 'astropitum', '6', 'Oasis farm', 200),
( 'Echeveria', 'https://cdn.discordapp.com/attachments/723792442859716619/798897831783956510/9355c19420baac62d289ca51a12f9548.jpg', '100', 'astropitum', '6', 'Oasis farm', 200),