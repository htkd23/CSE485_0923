CREATE TABLE 'tacgia'(
	'ma_tgia' INT UNSIGNED NOT NULL,
	'ten_tgia' VARCHAR(100) COLLATE utf8_unicode_ci NOT NULL,
	'hinh_tgia' VARCHAR(100) COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
alter table 'tacgia'
add primary KEY ('ma_tgia');

insert into 'tacgia' ('ma_tgia', 'ten_tgia', 'hinh_tgia') values (1, 'Marylinda Frick', 'mfrick0');
insert into 'tacgia' ('ma_tgia', 'ten_tgia', 'hinh_tgia') values (2, 'Cathleen Lelande', 'clelande1');
insert into 'tacgia' ('ma_tgia', 'ten_tgia', 'hinh_tgia') values (3, 'Keri Ebbings', 'kebbings2');
insert into 'tacgia' ('ma_tgia', 'ten_tgia', 'hinh_tgia') values (4, 'Jasmine Gasking', 'jgasking3');
insert into 'tacgia' ('ma_tgia', 'ten_tgia', 'hinh_tgia') values (5, 'Romola Stebbings', 'rstebbings4');
insert into 'tacgia' ('ma_tgia', 'ten_tgia', 'hinh_tgia') values (6, 'Ellwood Clough', 'eclough5');
insert into 'tacgia' ('ma_tgia', 'ten_tgia', 'hinh_tgia') values (7, 'Carmelia Mogford', 'cmogford6');
insert into 'tacgia' ('ma_tgia', 'ten_tgia', 'hinh_tgia') values (8, 'Darci Sidnell', 'dsidnell7');
insert into 'tacgia' ('ma_tgia', 'ten_tgia', 'hinh_tgia') values (9, 'Sullivan Pheasant', 'spheasant8');
insert into 'tacgia' ('ma_tgia', 'ten_tgia', 'hinh_tgia') values (10, 'Francis Lanphere', 'flanphere9');

CREATE TABLE 'theloai'(
	'ma_tloai' INT UNSIGNED NOT NULL;
	'ten_tloai' VARCHAR(50) COLLATE utf8_unicode_ci NOT NULL;
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

insert into 'theloai' ('ma_tloai', 'ten_tloai') values (1, 'Semaphore Pricklypear');
insert into 'theloai' ('ma_tloai', 'ten_tloai') values (2, 'Wideleaf Racomitrium Moss');
insert into 'theloai' ('ma_tloai', 'ten_tloai') values (3, 'Palmer''s Phacelia');
insert into 'theloai' ('ma_tloai', 'ten_tloai') values (4, 'Bulrush');
insert into 'theloai' ('ma_tloai', 'ten_tloai') values (5, 'St. Thomas Bean');
insert into 'theloai' ('ma_tloai', 'ten_tloai') values (6, 'Dicranum Moss');
insert into 'theloai' ('ma_tloai', 'ten_tloai') values (7, 'Sakhalin Corktree');
insert into 'theloai' ('ma_tloai', 'ten_tloai') values (8, 'Kingston Dewberry');
insert into 'theloai' ('ma_tloai', 'ten_tloai') values (9, 'Terlingua Sandmat');
insert into 'theloai' ('ma_tloai', 'ten_tloai') values (10, 'Desert Rosemallow');

CREATE TABLE 'baiviet'(
	'ma_bviet' INT UNSIGNED NOT NULL PRIMARY KEY;
	'tieude' VARCHAR(200) COLLATE utf8_unicode_ci  NOT NULL;
	'ten_bhat' VARCHAR(100) COLLATE utf8_unicode_ci  NOT NULL;
	'ma_tloai' INT UNSIGNED NOT NULL;
	'tomtat' TEXT NOT NULL;
	'noidung' TEXT;
	'ma_tgia' INT UNSIGNED NOT NULL;
	'ngayviet' DATETIME NOT NULL;
	'hinhanh' VARCHAR(200) COLLATE utf8_unicode_ci ;
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

ALTER TABLE 'baiviet'
ADD PRIMARY KEY ('ma_bviet'),
ADD CONSTRAINT 'baiviet_ibfk_1' FOREIGN key ('ma_tloai') references 'theloai' ('ma_tloai'),
ADD CONSTRAINT 'baiviet_ibfk-2' FOREIGN KEY ('ma_tgia') references 'tacgia' ('ma_tgia');

insert into 'baiviet' ('ma_baiviet', 'tieude', 'ten_bhat', 'ma_tloai', 'tomtat', 'noidung', 'ma_tgia', 'ngayviet', 'hinhanh') values (1, 'Rev', 'F.N.B. Corporation', 1, 'nulla ut erat id mauris vulputate elementum nullam varius nulla facilisi cras non', 'consectetuer adipiscing elit proin interdum mauris non ligula pellentesque ultrices phasellus id', 1, '2023-02-26', 'mattis odio donec vitae nisi nam ultrices libero non mattis pulvinar nulla');
insert into 'baiviet' ('ma_baiviet', 'tieude', 'ten_bhat', 'ma_tloai', 'tomtat', 'noidung', 'ma_tgia', 'ngayviet', 'hinhanh') values (2, 'Rev', 'Pointer Telocation Ltd.', 2, 'nulla sed vel enim sit amet nunc viverra dapibus nulla suscipit ligula in lacus curabitur at ipsum ac tellus semper', 'augue vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae donec', 2, '2022-10-29', 'lacinia aenean sit amet justo morbi ut odio cras mi pede malesuada in imperdiet et');
insert into 'baiviet' ('ma_baiviet', 'tieude', 'ten_bhat', 'ma_tloai', 'tomtat', 'noidung', 'ma_tgia', 'ngayviet', 'hinhanh') values (3, 'Mr', 'China New Borun Corporation', 3, 'eu orci mauris lacinia sapien quis libero nullam sit amet turpis elementum ligula vehicula consequat morbi a ipsum integer a', 'ultrices erat tortor sollicitudin mi sit amet lobortis sapien sapien non mi integer ac neque', 3, '2023-02-14', 'sem duis aliquam convallis nunc proin at turpis a pede posuere nonummy integer non velit donec diam neque');
insert into 'baiviet' ('ma_baiviet', 'tieude', 'ten_bhat', 'ma_tloai', 'tomtat', 'noidung', 'ma_tgia', 'ngayviet', 'hinhanh') values (4, 'Rev', 'Public Storage', 4, 'dolor sit amet consectetuer adipiscing elit proin risus praesent lectus vestibulum', 'ligula nec sem duis aliquam convallis nunc proin at turpis a pede posuere nonummy integer non velit', 4, '2022-09-30', 'amet turpis elementum ligula vehicula consequat morbi a ipsum integer a nibh in quis justo maecenas rhoncus aliquam');
insert into 'baiviet' ('ma_baiviet', 'tieude', 'ten_bhat', 'ma_tloai', 'tomtat', 'noidung', 'ma_tgia', 'ngayviet', 'hinhanh') values (5, 'Honorable', 'HSN, Inc.', 5, 'in congue etiam justo etiam pretium iaculis justo in hac habitasse platea dictumst', 'risus semper porta volutpat quam pede lobortis ligula sit amet eleifend pede libero quis orci nullam molestie nibh in', 5, '2023-09-22', 'ut ultrices vel augue vestibulum ante ipsum primis in faucibus orci luctus et ultrices');
insert into 'baiviet' ('ma_baiviet', 'tieude', 'ten_bhat', 'ma_tloai', 'tomtat', 'noidung', 'ma_tgia', 'ngayviet', 'hinhanh') values (6, 'Mrs', 'Hurco Companies, Inc.', 6, 'purus phasellus in felis donec semper sapien a libero nam dui proin leo odio porttitor id consequat in consequat', 'amet consectetuer adipiscing elit proin interdum mauris non ligula pellentesque ultrices phasellus id sapien in sapien iaculis congue vivamus', 6, '2022-09-30', 'eu interdum eu tincidunt in leo maecenas pulvinar lobortis est phasellus sit');
insert into 'baiviet' ('ma_baiviet', 'tieude', 'ten_bhat', 'ma_tloai', 'tomtat', 'noidung', 'ma_tgia', 'ngayviet', 'hinhanh') values (7, 'Dr', 'Dynex Capital, Inc.', 7, 'lectus in quam fringilla rhoncus mauris enim leo rhoncus sed', 'natoque penatibus et magnis dis parturient montes nascetur ridiculus mus vivamus', 7, '2023-08-27', 'gravida nisi at nibh in hac habitasse platea dictumst aliquam augue quam sollicitudin vitae consectetuer eget rutrum at lorem integer');
insert into 'baiviet' ('ma_baiviet', 'tieude', 'ten_bhat', 'ma_tloai', 'tomtat', 'noidung', 'ma_tgia', 'ngayviet', 'hinhanh') values (8, 'Ms', 'Standex International Corporation', 8, 'sed nisl nunc rhoncus dui vel sem sed sagittis nam congue risus semper porta volutpat quam pede lobortis ligula', 'magna vestibulum aliquet ultrices erat tortor sollicitudin mi sit amet lobortis sapien sapien', 8, '2023-03-26', 'elementum nullam varius nulla facilisi cras non velit nec nisi vulputate nonummy maecenas tincidunt');
insert into 'baiviet' ('ma_baiviet', 'tieude', 'ten_bhat', 'ma_tloai', 'tomtat', 'noidung', 'ma_tgia', 'ngayviet', 'hinhanh') values (9, 'Ms', 'Avenue Therapeutics, Inc.', 9, 'adipiscing elit proin risus praesent lectus vestibulum quam sapien varius ut blandit', 'nulla tempus vivamus in felis eu sapien cursus vestibulum proin eu mi nulla', 9, '2023-03-22', 'justo lacinia eget tincidunt eget tempus vel pede morbi porttitor');

commit;