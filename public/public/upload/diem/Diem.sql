CREATE TABLE if not EXISTS Namhoc(
    MaNH char(15)NOT  NULL,
    TenNH varchar(30) NOT NULL,
    PRIMARY KEY(MaNH)
    );
CREATE TABLE  if not EXISTS Kyhoc (
         MaKH char(20) NOT NULL,
         TenKH varchar(30) NOT NULL,
          MaNH char(15)NOT  NULL,
         PRIMARY KEY(MaKH), 
         FOREIGN KEY(MaNH) references Namhoc(MaNH) on update cascade on delete cascade
         
         );
CREATE TABLE  if not EXISTS LopMH (
         MaLMH char(20) NOT NULL,
         TenLMH varchar(30) NOT NULL,
          MaKH char(20)NOT  NULL,
         PRIMARY KEY(MaLMH), 
         FOREIGN KEY(MaKH) references Kyhoc(MaKH) on update cascade on delete cascade
         
         );
CREATE TABLE  if not EXISTS File (
         MaFile char(20) NOT NULL,
         TenFile varchar(30) NOT NULL,
         KieuFile text(10)NOT  NULL,
         MaLMH char(20) NOT NULL,
         PRIMARY KEY(MaFile), 
         FOREIGN KEY(MaLMH) references LopMH(MaLMH) on update cascade on delete cascade
         
         );

CREATE TABLE if not EXISTS QuyenTC(
    MaTC int(15)NOT  NULL,
    Tenquyen varchar(30) NOT NULL,
    PRIMARY KEY(MaTC)
    );
CREATE TABLE  if not EXISTS User (
         id int(15) NOT NULL,
         Email varchar(50) NOT NULL,
         password varchar(30) NOT NULL,
         MaFile char(20) NOT NULL,
         MaTC int(15) NOT NULL,
         PRIMARY KEY(id), 
         FOREIGN KEY(MaFile) references File(MaFile) on update cascade on delete cascade,
         FOREIGN KEY(MaTC) references QuyenTC(MaTC) on update cascade on delete cascade
         );

//thêm bản ghi
//năm học
INSERT INTO Namhoc(MaNH, TenNH)
VALUES ('NH1','Năm học 2013-2014');

INSERT INTO Namhoc(MaNH, TenNH)
VALUES ('NH2','Năm học 2014-2015');

INSERT INTO Namhoc(MaNH, TenNH)
VALUES ('NH3','Năm học 2015-2016');

//kỳ học
INSERT INTO Kyhoc(MaKH, TenKH, MaNH)
VALUES ('KH1','Kỳ 1','NH1');
INSERT INTO Kyhoc(MaKH, TenKH, MaNH)
VALUES ('KH2','Kỳ 2','NH1');
INSERT INTO Kyhoc(MaKH, TenKH, MaNH)
VALUES ('KH3','Kỳ phụ','NH1');

INSERT INTO Kyhoc(MaKH, TenKH, MaNH)
VALUES ('KH4','Kỳ 1','NH2');
INSERT INTO Kyhoc(MaKH, TenKH, MaNH)
VALUES ('KH5','Kỳ 2','NH2');
INSERT INTO Kyhoc(MaKH, TenKH, MaNH)
VALUES ('KH6','Kỳ phụ','NH2');

INSERT INTO Kyhoc(MaKH, TenKH, MaNH)
VALUES ('KH7','Kỳ 1','NH3');
INSERT INTO Kyhoc(MaKH, TenKH, MaNH)
VALUES ('KH8','Kỳ 2','NH3');
INSERT INTO Kyhoc(MaKH, TenKH, MaNH)
VALUES ('KH9','Kỳ phụ','NH3');
 
 //lớp môn học

INSERT INTO LopMH( MaLMH, TenLMH,MaKH)
VALUES ('PHY11011','Điện và Quang','KH1');
INSERT INTO LopMH( MaLMH, TenLMH,MaKH)
VALUES ('PHY11012','Điện và Quang','KH1');
INSERT INTO LopMH( MaLMH, TenLMH,MaKH)
VALUES ('PHY11013','Điện và Quang','KH1');



INSERT INTO LopMH( MaLMH, TenLMH,MaKH)
VALUES ('MAT10941','Giải tích 1','KH1');
INSERT INTO LopMH( MaLMH, TenLMH,MaKH)
VALUES ('MAT10942 ','Giải tích 1','KH1');
INSERT INTO LopMH( MaLMH, TenLMH,MaKH)
VALUES ('MAT10945 ','Giải tích 1','KH1');

INSERT INTO LopMH( MaLMH, TenLMH,MaKH)
VALUES ('INT22053 ','Kiến trúc máy tính','KH1');
INSERT INTO LopMH( MaLMH, TenLMH,MaKH)
VALUES ('INT22052 ','Kiến trúc máy tính','KH1');
INSERT INTO LopMH( MaLMH, TenLMH,MaKH)
VALUES ('INT22054','Kiến trúc máy tính','KH1');

INSERT INTO LopMH( MaLMH, TenLMH,MaKH)
VALUES ('INT20241','Cơ sở dữ liệu','KH1');
INSERT INTO LopMH( MaLMH, TenLMH,MaKH)
VALUES ('INT20242','Cơ sở dữ liệu','KH1');
INSERT INTO LopMH( MaLMH, TenLMH,MaKH)
VALUES ('INT20243','Cơ sở dữ liệu','KH1');

INSERT INTO LopMH( MaLMH, TenLMH,MaKH)
VALUES ('ELT30461','Truyền thông mạng máy tính 1','KH1');
INSERT INTO LopMH( MaLMH, TenLMH,MaKH)
VALUES ('ELT30462','Truyền thông mạng máy tính 1','KH1');
INSERT INTO LopMH( MaLMH, TenLMH,MaKH)
VALUES ('FLF11081','Tiếng Anh B2','KH3');
INSERT INTO LopMH( MaLMH, TenLMH,MaKH)
VALUES ('FLF11082','Tiếng Anh B2','KH2');


INSERT INTO LopMH( MaLMH, TenLMH,MaKH)
VALUES ('INT10501','Toán học rời rạc','KH2');
INSERT INTO LopMH( MaLMH, TenLMH,MaKH)
VALUES ('INT10502','Toán học rời rạc','KH2');

INSERT INTO LopMH( MaLMH, TenLMH,MaKH)
VALUES ('EPN20171','Khoa học vật liệu đại cương','KH2');
INSERT INTO LopMH( MaLMH, TenLMH,MaKH)
VALUES ('EPN20172','Khoa học vật liệu đại cương','KH2');

INSERT INTO LopMH( MaLMH, TenLMH,MaKH)
VALUES ('POL10011','Tư tưởng Hồ Chí Minh ','KH2');
INSERT INTO LopMH( MaLMH, TenLMH,MaKH)
VALUES ('POL10014','Tư tưởng Hồ Chí Minh ','KH2');


INSERT INTO LopMH( MaLMH, TenLMH,MaKH)
VALUES ('INT3307','An toàn và an ninh mạng ','KH2');

INSERT INTO LopMH( MaLMH, TenLMH,MaKH)
VALUES ('INT3301 ','Thực hành hệ điều hành mạng ','KH2');

//FILE
INSERT INTO File( MaFile, TenFile,KieuFile,MaLMH)
VALUES ('FL1','Tư tưởng Hồ Chí Minh','pdf','POL10011');

INSERT INTO File( MaFile, TenFile,KieuFile,MaLMH)
VALUES ('FL2','An toàn và an ninh mạng','pdf','INT3307');

INSERT INTO File( MaFile, TenFile,KieuFile,MaLMH)
VALUES ('FL3','Toán học rời rạc','doc','INT10501');

//QuyenTC
INSERT INTO QuyenTC(MaTC, Tenquyen)
VALUES ('1001','Quản trị viên');
INSERT INTO QuyenTC(MaTC, Tenquyen)
VALUES ('1002','Giảng viên');

//User
INSERT INTO User(id, Email,Password,MaFile,MaTC)
VALUES ('1100','admin@uet.vnu.edu.vn','123456','FL1','1001');



