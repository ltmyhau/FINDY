<?php
include "database.php"
?>

<?php
class connect
{
    private $db;
    public function __construct()
    {
        $this->db = new Database();
    }

    public function insert_register()
    {
        $hoTen = $_POST['hoTen'];
        $Email = $_POST['Email'];
        $matKhau = $_POST['matKhau'];
        $repeatmatKhau = $_POST['repeatmatKhau'];

        $query = "INSERT INTO users(username,email,password,role) VALUES ('$hoTen','$Email','$matKhau','$repeatmatKhau')";
        $result = $this->db->insert($query);
        return $result;
    }

    public function select_register()
    {
        $query = "SELECT * FROM register where Email='$mail'";
        $result = $this->db->select($query);
        return $result;
    }

    public function login()
    {
        $query = "SELECT * FROM register WHERE Email='$Email' AND matKhau='$matKhau'";
        $result = $this->db->select($query);
        return $result;
    }

    public function select_registerall()
    {
        $query = "SELECT * FROM register";
        $result = $this->db->select($query);
        return $result;
    }

    public function insert_userphotoup()
    {
        $hinhAnh = $_FILES['hinhAnh']['name'];
        $tenCongViec = $_POST['tenCongViec'];
        $moTa = $_POST['moTa'];
        $congCu = $_POST['congCu'];
        $query = "INSERT INTO user_up(hinhAnh, tenCongViec, moTa, congCu) values ('$hinhAnh','$tenCongViec','$moTa','$congCu')";
        $result = $this->db->insert($query);
        return $result;
    }

    public function select_userphotoup()
    {
        $query = "SELECT * FROM user_up";
        $result = $this->db->select($query);
        return $result;
    }

    public function insert_usermakeupup()
    {
        $hinhAnh = $_FILES['hinhAnh']['name'];
        $tenCongViec = $_POST['tenCongViec'];
        $moTa = $_POST['moTa'];
        $congCu = $_POST['congCu'];
        $query = "INSERT INTO usermakeup_up(hinhAnh, tenCongViec, moTa, congCu) values ('$hinhAnh','$tenCongViec','$moTa','$congCu')";
        $result = $this->db->insert($query);
        return $result;
    }

    public function select_usermakeupup()
    {
        $query = "SELECT * FROM usermakeup_up";
        $result = $this->db->select($query);
        return $result;
    }

    public function insert_profilephoto()
    {
        $mathongtintho = $_POST['mathongtintho'];
        $namephoto = $_POST['namephoto'];
        $vitriungtuyen = $_POST['vitriungtuyen'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $mota = $_POST['mota'];
        $diachi = $_POST['diachi'];




        $query = "INSERT INTO profile ( mathongtintho, ten, nghenghiep, sdt, email, diachi, gioithieu)
            VALUES ('$mathongtintho', '$namephoto', '$vitriungtuyen',  '$phone','$email', '$diachi', '$mota')";


        $result = $this->db->insert($query);

        return $result;
    }

    public function select_profilephoto()
    {
        $query = "SELECT *FROM profilephoto";
        $result = $this->db->select($query);
        return $result;
    }

    public function select_request($id_tho)
    {
        $query = "select *from profile 
            inner join post_tructiep on post_tructiep.ma_profile = profile.ma_profile
            inner join thongtinthue on thongtinthue.mathongtinthue = post_tructiep.mathongtinthue
            inner join account_thue on account_thue.id_thue = thongtinthue.id_thue
            inner join thongtintho on thongtintho.mathongtintho = profile.mathongtintho
            where id_tho = $id_tho";
        $result = $this->db->select($query);
        return $result;
    }

    public function insert_postjob()
    {
        $mathongtinthue = $_POST["post-job__form-ma"];
        $name = $_POST["post-job__form-name"];
        $place = $_POST["post-job__form-place"];
        $time = $_POST["post-job__form-time"];
        $price = $_POST["post-job__form-price"];
        $event = $_POST["post-job__form-event"];
        $style = $_POST["post-job__form-style"];
        $hinh = $_FILES["hinhanh"]['name'];
        $description = $_POST["post-job__form-description"];
        $query = "INSERT INTO post_timtho (mathongtinthue,tenposttimtho, diadiem, thoigian, gia, sukien, phongcach, anhmau, motachitiet) VALUES ('$mathongtinthue','$name', '$place', '$time', '$price', '$event', '$style', '$hinh', '$description')";
        $result = $this->db->insert($query);
        return $result;
    }

    public function insert_posttructiep()
    {
        $mathongtinthue = $_POST["post-job__form-ma"];
        $ma_profile = $_POST["post-job__form-maprofile"];
        $name = $_POST["post-job__form-name"];
        $place = $_POST["post-job__form-place"];
        $time = $_POST["post-job__form-time"];
        $price = $_POST["post-job__form-price"];
        $event = $_POST["post-job__form-event"];
        $style = $_POST["post-job__form-style"];
        $hinh = $_FILES["hinhanh"]['name'];
        $description = $_POST["post-job__form-description"];
        $query = "INSERT INTO post_tructiep (mathongtinthue,ma_profile,tenposttimtho, diadiem, thoigian, gia, sukien, phongcach, anhmau, motachitiet) VALUES ('$mathongtinthue','$ma_profile','$name', '$place', '$time', '$price', '$event', '$style', '$hinh', '$description')";
        $result = $this->db->insert($query);
        return $result;
    }

    public function select_postjob()
    {
        $query = "SELECT *FROM post_timtho
            inner join thongtinthue on post_timtho.mathongtinthue = thongtinthue.mathongtinthue
            inner join account_thue on account_thue.id_thue = thongtinthue.id_thue";
        $result = $this->db->select($query);
        return $result;
    }

    public function insert_accountthue()
    {
        $hoTen = $_POST['hoTen'];
        $Email = $_POST['Email'];
        $matKhau = $_POST['matKhau'];


        $query = "INSERT INTO account_thue(hoTen,gmail,matkhau,role) VALUES ('$hoTen','$Email','$matKhau','nguoi_thue')";
        $result = $this->db->insert($query);
        return $result;
    }

    public function insert_accounttho()
    {
        $hoTen = $_POST['hoTen2'];
        $Email = $_POST['Email2'];
        $matKhau = $_POST['matKhau2'];
        $query = "INSERT INTO account_tho(hoTen,gmail,matkhau, role) VALUES ('$hoTen','$Email','$matKhau','nguoi_tho')";
        $result = $this->db->insert($query);
        return $result;
    }

    public function select_profile()
    {
        $query = "SELECT *FROM profile
        inner join thongtintho on thongtintho.mathongtintho = profile.mathongtintho";
        $result = $this->db->select($query);
        return $result;
    }
    public function insert_thongtintho()
    {
        $id_thue = $_POST['id_thue'];
        $hinhanhthue = $_FILES['hinhanhthue']['name'];
        $diachi = $_POST['diachi'];
        $ngaysinh = $_POST['ngaysinh'];
        $cccd = $_POST['cccd'];
        $gioitinh = $_POST['gioitinh'];
        $sdt = $_POST['sdt'];
        $query = "INSERT INTO thongtinthue (id_thue, hinhanhthue, diachi, ngaysinh, cccd, gioitinh, sdt) 
            VALUES ('$id_thue','$hinhanhthue', '$diachi', '$ngaysinh', '$cccd', '$gioitinh', '$sdt')";
        $result = $this->db->insert($query);
        return $result;
    }
    public function insert_thongtinthophoto()
    {
        $id_tho = $_POST['id_tho'];
        $hinhanhtho = $_FILES['hinhanhtho']['name'];
        $diachi = $_POST['diachi'];
        $ngaysinh = $_POST['ngaysinh'];
        $cccd = $_POST['cccd'];
        $gioitinh = $_POST['gioitinh'];
        $sdt = $_POST['sdt'];
        $query = "INSERT INTO thongtintho (id_tho, hinhanhtho, diachi, ngaysinh, cccd, gioitinh, sdt) 
            VALUES ('$id_tho','$hinhanhtho', '$diachi', '$ngaysinh', '$cccd', '$gioitinh', '$sdt')";
        $result = $this->db->insert($query);
        
        return $result;
    }
    public function select_thongtinthue()
    {
        $query = "SELECT *FROM thongtinthue";
        $result = $this->db->select($query);
        return $result;
    }
    public function select_posttimtho($id_thue)
    {
        $query = "SELECT *FROM post_timtho
            inner JOIN thongtinthue ON post_timtho.mathongtinthue = thongtinthue.mathongtinthue
             where id_thue = $id_thue";
        $result = $this->db->select($query);
        return $result;
    }
    public function result_thongtintho($ma_posttimtho)
    {
        $query = "SELECT * FROM quanlybaidang
            INNER JOIN thongtintho ON thongtintho.mathongtintho = quanlybaidang.ma_thongtintho
            inNER JOIN account_tho on thongtintho.id_tho = account_tho.id_tho
            inner join profile on profile.mathongtintho = thongtintho.mathongtintho
            WHERE quanlybaidang.ma_posttimtho = $ma_posttimtho and nghenghiep <> ''";
        $result = $this->db->select($query);
        return $result;
    }
    public function select_thanhtoancoc($id_thue)
    {
        $query = "select *from post_timtho
            inner JOIN thue_thanhtoancoc ON thue_thanhtoancoc.ma_posttimtho = post_timtho.ma_posttimtho
            inner join thongtintho on thongtintho.mathongtintho = thue_thanhtoancoc.mathongtintho
            inner join thongtinthue on thongtinthue.mathongtinthue = post_timtho.mathongtinthue
            inner join quanlybaidang on quanlybaidang.ma_posttimtho = post_timtho.ma_posttimtho
            inner join account_tho on account_tho.id_tho = thongtintho.id_tho
            where id_thue = $id_thue";
        $result = $this->db->select($query);
        return $result;
    }
    public function select_thanhtoancoctho($id_tho)
    {
        $query = "select *from post_timtho
        inner JOIN thue_thanhtoancoc ON thue_thanhtoancoc.ma_posttimtho = post_timtho.ma_posttimtho
        inner join thongtintho on thongtintho.mathongtintho = thue_thanhtoancoc.mathongtintho
        inner join thongtinthue on thongtinthue.mathongtinthue = post_timtho.mathongtinthue
        inner join account_thue on account_thue.id_thue = thongtinthue.id_thue
        inner join quanlybaidang on quanlybaidang.ma_posttimtho = post_timtho.ma_posttimtho

        where thongtintho.id_tho = $id_tho";
        $result = $this->db->select($query);
        return $result;
    }
    public function select_thuchien($id_thue)
    {
        $query = "select *from post_timtho
        inner JOIN thuchien ON thuchien.ma_posttimtho = post_timtho.ma_posttimtho
        inner join thongtintho on thongtintho.mathongtintho = thuchien.mathongtintho
        inner join thongtinthue on thongtinthue.mathongtinthue = post_timtho.mathongtinthue
        inner join account_tho on account_tho.id_tho = thongtintho.id_tho
        inner join quanlybaidang on quanlybaidang.ma_posttimtho = post_timtho.ma_posttimtho

        where thongtinthue.id_thue = $id_thue";
        $result = $this->db->select($query);
        return $result;
    }
    public function select_thuchientho($id_tho)
    {
        $query = "select *from post_timtho
            inner JOIN thuchien ON thuchien.ma_posttimtho = post_timtho.ma_posttimtho
            inner join thongtintho on thongtintho.mathongtintho = thuchien.mathongtintho
            inner join thongtinthue on thongtinthue.mathongtinthue = post_timtho.mathongtinthue
            inner join account_thue on account_thue.id_thue = thongtinthue.id_thue
            inner join quanlybaidang on quanlybaidang.ma_posttimtho = post_timtho.ma_posttimtho

            where thongtintho.id_tho = $id_tho";
        $result = $this->db->select($query);
        return $result;
    }
    public function select_nhansanpham($id_thue)
    {
        $query = "select *from post_timtho
            inner JOIN thue_nhansanpham ON thue_nhansanpham.ma_posttimtho = post_timtho.ma_posttimtho
            inner join thongtintho on thongtintho.mathongtintho = thue_nhansanpham.mathongtintho
            inner join thongtinthue on thongtinthue.mathongtinthue = post_timtho.mathongtinthue
            inner join account_tho on account_tho.id_tho = thongtintho.id_tho

            where id_thue = $id_thue";
        $result = $this->db->select($query);
        return $result;
    }
    public function insert_thanhtoancoc()
    {
        $maposttimtho = $_POST['maposttimtho'];
        $mathongtintho = $_POST['mathongtintho'];
        $query = "INSERT INTO thue_thanhtoancoc (ma_posttimtho, mathongtintho) 
            VALUES ('$maposttimtho','$mathongtintho')";
        $result = $this->db->insert($query);
        return $result;
    }
    public function select_nhansanphamtho($id_tho)
    {
        $query = "select *from post_timtho
            inner JOIN tho_giaosanpham ON tho_giaosanpham.ma_posttimtho = post_timtho.ma_posttimtho
            inner join thongtintho on thongtintho.mathongtintho = tho_giaosanpham.mathongtintho
            inner join thongtinthue on thongtinthue.mathongtinthue = post_timtho.mathongtinthue
            inner join account_thue on account_thue.id_thue = thongtinthue.id_thue
            inner join quanlybaidang on quanlybaidang.ma_posttimtho = post_timtho.ma_posttimtho

            where thongtintho.id_tho = $id_tho";
        $result = $this->db->select($query);
        return $result;
    }
    public function delete_quanlybaidang($maquanlybaidang)
    {
        $query = "DELETE FROM quanlybaidang where ma_quanlybaidang = '$maquanlybaidang'";
        $result = $this->db->delete($query);
        return $result;
    }
    public function insert_quanlybaidang()
    {
        $mathongtintho = $_POST['mathongtintho'];
        $ma_posttimtho = $_POST['ma_posttimtho'];
        $giatri = $_POST['giatri'];
        $query = "INSERT INTO quanlybaidang (ma_posttimtho, ma_thongtintho, giatri)
            values ('$ma_posttimtho', '$mathongtintho','$giatri')";
        $result = $this->db->insert($query);
        return $result;
    }
    public function insert_thothichbaipost()
    {
        $mathongtintho = $_POST['mathongtintho'];
        $ma_posttimtho = $_POST['ma_posttimtho'];
        $query = "INSERT INTO thothichbaipost (ma_posttimtho, mathongtintho)
            values ('$ma_posttimtho', '$mathongtintho')";
        $result = $this->db->insert($query);
        return $result;
    }
    public function insert_thuchien()
    {
        $maposttimtho = $_POST['ma_posttimtho_thuchien'];
        $mathongtintho = $_POST['mathongtintho_thuchien'];
        $query = "INSERT INTO thuchien (ma_posttimtho, mathongtintho) 
            VALUES ('$maposttimtho','$mathongtintho')";
        $result = $this->db->insert($query);

        return $result;
    }
    public function insert_nhansanpham()
    {
        $maposttimtho = $_POST['ma_posttimtho_thothuchien'];
        $mathongtintho = $_POST['mathongtintho_thothuchien'];
        $query = "INSERT INTO thue_nhansanpham (ma_posttimtho, mathongtintho) 
            VALUES ('$maposttimtho','$mathongtintho')";
        $result = $this->db->insert($query);
        return $result;
    }
    public function insert_thogiaosanpham()
    {
        $maposttimtho = $_POST['ma_posttimtho_thothuchien'];
        $mathongtintho = $_POST['mathongtintho_thothuchien'];
        $query = "INSERT INTO tho_giaosanpham (ma_posttimtho, mathongtintho) 
            VALUES ('$maposttimtho','$mathongtintho')";
        $result = $this->db->insert($query);
        return $result;
    }

    public function select_sanpham($id_thue)
    {
        $query = "select *from tho_sanpham
            inner join post_timtho on post_timtho.ma_posttimtho = tho_sanpham.ma_posttimtho
            inner join thongtintho on thongtintho.mathongtintho = tho_sanpham.mathongtintho
            inner join thongtinthue on thongtinthue.mathongtinthue = post_timtho.mathongtinthue
            inner join quanlybaidang on quanlybaidang.ma_posttimtho = post_timtho.ma_posttimtho

            inner join account_tho on account_tho.id_tho = thongtintho.id_tho
            where thongtinthue.id_thue = $id_thue";
        $result = $this->db->select($query);
        return $result;
    }
    public function select_danhgia($id_thue)
    {
        $query = "select *from post_timtho
            inner JOIN thue_danhgia ON thue_danhgia.ma_posttimtho = post_timtho.ma_posttimtho
            inner join thongtintho on thongtintho.mathongtintho = thue_danhgia.mathongtintho
            inner join thongtinthue on thongtinthue.mathongtinthue = post_timtho.mathongtinthue
            inner join account_tho on account_tho.id_tho = thongtintho.id_tho
            inner join quanlybaidang on quanlybaidang.ma_posttimtho = post_timtho.ma_posttimtho

            where thongtinthue.id_thue = $id_thue";
        $result = $this->db->select($query);
        return $result;
    }
    public function insert_thongtindanhgia()
    {
        $mathongtinthue = $_POST['mathongtinthue'];
        $mathongtintho = $_POST['mathongtintho'];
        $mota = $_POST['mota'];
        $rating = $_POST['rating1'];
        $hinhdanhgia = $_FILES['hinhdanhgia']['name'];
        $videodanhgia = $_FILES['videodanhgia']['name'];
        $query = "INSERT INTO thongtindanhgia (mathongtinthue, mathongtintho, rating, mota, hinhdanhgia,videodanhgia) VALUES
            ('$mathongtinthue','$mathongtintho','$rating','$mota','$hinhdanhgia','$videodanhgia')";
        $result = $this->db->insert($query);
        return $result;
    }
    public function insert_thanhtoancoctt()
    {
        $maposttt = $_POST['maposttt'];
        $mathongtinthott = $_POST['mathongtinthott'];
        $query = "INSERT INTO thue_thanhtoancoctt (ma_posttructiep, mathongtintho)
            VALUES ('$maposttt', '$mathongtinthott')";
        $result = $this->db->insert($query);
        return $result;
    }
    public function select_thanhtoancoctt($id_tho)
    {
        $query = "select *from thue_thanhtoancoctt
            inner join thongtintho on thongtintho.mathongtintho = thue_thanhtoancoctt.mathongtintho
            inner join post_tructiep on post_tructiep.ma_posttructiep = thue_thanhtoancoctt.ma_posttructiep
            inner join thongtinthue on thongtinthue.mathongtinthue = post_tructiep.mathongtinthue
            inner join account_thue on account_thue.id_thue = thongtinthue.id_thue
            where thongtintho.id_tho = $id_tho";
        $result = $this->db->select($query);
        return $result;
    }
    public function select_thanhtoancocttthue($id_thue)
    {
        $query = "select *from thue_thanhtoancoctt
            inner join thongtintho on thongtintho.mathongtintho = thue_thanhtoancoctt.mathongtintho
            inner join post_tructiep on post_tructiep.ma_posttructiep = thue_thanhtoancoctt.ma_posttructiep
            inner join thongtinthue on thongtinthue.mathongtinthue = post_tructiep.mathongtinthue
            inner join account_tho on account_tho.id_tho = thongtintho.id_tho
            where thongtinthue.id_thue = $id_thue";
        $result = $this->db->select($query);
        return $result;
    }
    public function insert_thuchientt()
    {
        $maposttimthott = $_POST['ma_posttimtho_thuchientt'];
        $mathongtinthott = $_POST['mathongtintho_thuchientt'];
        $query = "INSERT INTO thuchientt (ma_posttructiep, mathongtintho) 
            VALUES ('$maposttimthott','$mathongtinthott')";
        $result = $this->db->insert($query);
        return $result;
    }
    public function select_thuchienttthue($id_thue)
    {
        $query = "select *from thuchientt
            inner join thongtintho on thongtintho.mathongtintho = thuchientt.mathongtintho
            inner join post_tructiep on post_tructiep.ma_posttructiep = thuchientt.ma_posttructiep
            inner join thongtinthue on thongtinthue.mathongtinthue = post_tructiep.mathongtinthue
            inner join account_tho on account_tho.id_tho = thongtintho.id_tho
            where thongtinthue.id_thue = $id_thue";
        $result = $this->db->select($query);
        return $result;
    }
    public function select_thuchientt($id_tho)
    {
        $query = "select *from thuchientt
            inner join thongtintho on thongtintho.mathongtintho = thuchientt.mathongtintho
            inner join post_tructiep on post_tructiep.ma_posttructiep = thuchientt.ma_posttructiep
            inner join thongtinthue on thongtinthue.mathongtinthue = post_tructiep.mathongtinthue
            inner join account_thue on account_thue.id_thue = thongtinthue.id_thue
            where thongtintho.id_tho = $id_tho";
        $result = $this->db->select($query);
        return $result;
    }
    public function insert_thogiaosanphamtt()
    {
        $maposttimthott = $_POST['ma_posttimtho_thothuchientt'];
        $mathongtinthott = $_POST['mathongtintho_thothuchientt'];
        $query = "INSERT INTO tho_giaosanphamtt (ma_posttructiep, mathongtintho) 
            VALUES ('$maposttimthott','$mathongtinthott')";
        $result = $this->db->insert($query);
        return $result;
    }
    public function select_nhansanphamthott($id_tho)
    {
        $query = "select *from post_tructiep
            inner JOIN tho_giaosanphamtt ON tho_giaosanphamtt.ma_posttructiep = post_tructiep.ma_posttructiep
            inner join thongtintho on thongtintho.mathongtintho = tho_giaosanphamtt.mathongtintho
            inner join thongtinthue on thongtinthue.mathongtinthue = post_tructiep.mathongtinthue
            inner join account_thue on account_thue.id_thue = thongtinthue.id_thue
            where thongtintho.id_tho = $id_tho";
        $result = $this->db->select($query);
        return $result;
    }
    public function insert_sanphamtt($uniqueId)
    {
        $inputmathogiaosp = $_POST['inputmathogiaosp1'];
        $inputmathongtinthue = $_POST['inputmathongtinthue1'];
        $inputdrive = $_POST['inputdrive1'];
        $query = "INSERT INTO sanphamtt (mathogiaosanphamtt, mathongtinthue, drive) 
            VALUES ('$inputmathogiaosp', '$inputmathongtinthue', '$inputdrive')";
        $result = $this->db->insert($query);
        return $result;
    }
    public function insert_danhgia()
    {
        $drive = $_POST['drive'];
        $mathongtintho = $_POST['mathongtintho'];
        $ma_posttimtho = $_POST['ma_posttimtho'];
        $query = "INSERT INTO thue_danhgia (ma_posttimtho, mathongtintho, drive) 
            VALUES ('$ma_posttimtho','$mathongtintho',' $drive ')";
        $result = $this->db->insert($query);
        return $result;
    }
    public function delete_thanhtoancoc($mathanhtoancoc)
    {
        $query = "DELETE FROM thue_thanhtoancoc WHERE ma_thanhtoancoc = '$mathanhtoancoc'";
        $result = $this->db->delete($query);
        return $result;
    }
    public function delete_thuchien($mathuchien)
    {
        $query = "DELETE FROM thuchien WHERE mathuchien = '$mathuchien'";
        $result = $this->db->delete($query);
        return $result;
    }
    public function delete_thogiaosanpham($mathogiaosanpham)
    {
        $query = "DELETE FROM tho_giaosanpham WHERE mathogiaosanpham = '$mathogiaosanpham'";
        $result = $this->db->delete($query);
        return $result;
    }
    public function insert_thochochinhsua()
    {
        $inputmathogiaosp = $_POST['inputmathogiaosp'];
        $inputmathongtinthue = $_POST['inputmathongtinthue'];
        $inputdrive = $_POST['inputdrive'];
        $query = "INSERT INTO thochochinhsua (ma_posttimtho, mathongtintho, drive) 
            VALUES ('$inputmathogiaosp', '$inputmathongtinthue', '$inputdrive')";
        $result = $this->db->insert($query);
        return $result;
    }
    public function insert_sanpham()
    {
        $inputmathogiaosp = $_POST['inputmathogiaosp'];
        $inputmathongtinthue = $_POST['inputmathongtinthue'];
        $inputdrive = $_POST['inputdrive'];
        $query = "INSERT INTO tho_sanpham (ma_posttimtho, mathongtintho, drive) 
            VALUES ('$inputmathogiaosp', '$inputmathongtinthue', '$inputdrive')";
        $result = $this->db->insert($query);
        return $result;
    }

    public function select_thochochinhsua($id_tho)
    {
        $query = "SELECT *FROM thochochinhsua
            inner join post_timtho on thochochinhsua.ma_posttimtho = post_timtho.ma_posttimtho
            inner join thongtinthue on thongtinthue.mathongtinthue = post_timtho.mathongtinthue
            inner join account_thue on account_thue.id_thue = thongtinthue.id_thue
            inner join thongtintho on thongtintho.mathongtintho = thochochinhsua.mathongtintho
            inner join quanlybaidang on quanlybaidang.ma_posttimtho = post_timtho.ma_posttimtho

            where thongtintho.id_tho = $id_tho";

        $result = $this->db->select($query);
        return $result;
    }
    public function insert_yeucauchinhsua()
    {
        $inputmathogiaosp = $_POST['ma_posttimthoyc'];
        $inputmathongtinthue = $_POST['mathongtinthoyc'];
        $inputdrive = $_POST['driveyc'];
        $query = "INSERT INTO yeucauchinhsua (ma_posttimtho, mathongtintho, drive) 
            VALUES ('$inputmathogiaosp', '$inputmathongtinthue', '$inputdrive')";
        $result = $this->db->insert($query);
        return $result;
    }
    public function delete_thosanpham($ma_posttimtho, $mathongtintho)
    {
        $query = "DELETE FROM tho_sanpham WHERE ma_posttimtho = '$ma_posttimtho' and mathongtintho = '$mathongtintho'";
        $result = $this->db->delete($query);
        return $result;
    }
    public function insert_thuenhanlaisanpham()
    {
        $inputmathogiaosp = $_POST['ma_posttimthoyc'];
        $inputmathongtinthue = $_POST['mathongtinthoyc'];
        $inputdrive = $_POST['driveyc'];
        $query = "INSERT INTO yeucauchinhsua (ma_posttimtho, mathongtintho, drive) 
            VALUES ('$inputmathogiaosp', '$inputmathongtinthue', '$inputdrive')";
        $result = $this->db->insert($query);
        return $result;
    }
    public function select_yecauchinhsua($id_tho)
    {
        $query = "SELECT *FROM yeucauchinhsua
            inner join post_timtho on yeucauchinhsua.ma_posttimtho = post_timtho.ma_posttimtho
            inner join thongtinthue on thongtinthue.mathongtinthue = post_timtho.mathongtinthue
            inner join account_thue on account_thue.id_thue = thongtinthue.id_thue
            inner join thongtintho on thongtintho.mathongtintho = yeucauchinhsua.mathongtintho
            where thongtintho.id_tho = $id_tho";

        $result = $this->db->select($query);
        return $result;
    }
    public function delete_thochosanpham($ma_posttimtho, $mathongtintho)
    {
        $query = "DELETE FROM thochochinhsua WHERE ma_posttimtho = '$ma_posttimtho' and mathongtintho = '$mathongtintho'";
        $result = $this->db->delete($query);
        return $result;
    }
    public function insert_guilaisanpham($uniqueId1)
    {
        $inputmathogiaosp = $_POST['inputmathogiaosp2'];
        $inputmathongtinthue = $_POST['inputmathongtinthue2'];
        $inputdrive = $_POST['inputdrive2'];
        $query = "INSERT INTO tho_sanpham (ma_posttimtho, mathongtintho, drive) 
            VALUES ('$inputmathogiaosp', '$inputmathongtinthue', '$inputdrive')";
        $result = $this->db->insert($query);
        return $result;
    }
    public function delete_yeucauchinhsua($ma_posttimtho, $mathongtintho)
    {
        $query = "DELETE FROM yeucauchinhsua WHERE ma_posttimtho = '$ma_posttimtho' and mathongtintho = '$mathongtintho'";
        $result = $this->db->delete($query);
        return $result;
    }
    public function select_thongtincuatho($id_tho)
    {
        $query = "SELECT *FROM thongtintho where id_tho = '$id_tho'";
        $result = $this->db->select($query);
        return $result;
    }
    public function insert_thochochinhsua2()
    {
        $inputmathogiaosp = $_POST['inputmathogiaosp2'];
        $inputmathongtinthue = $_POST['inputmathongtinthue2'];
        $inputdrive = $_POST['inputdrive2'];
        $query = "INSERT INTO thochochinhsua (ma_posttimtho, mathongtintho, drive) 
            VALUES ('$inputmathogiaosp', '$inputmathongtinthue', '$inputdrive')";
        $result = $this->db->insert($query);
        return $result;
    }
    public function select_dathanhtoan($id_tho)
    {
        $query = "select *from thanhtoan
            inner join post_timtho on post_timtho.ma_posttimtho = thanhtoan.ma_posttimtho
            inner join thongtintho on thongtintho.mathongtintho = thanhtoan.mathongtintho
            inner join thongtinthue on thongtinthue.mathongtinthue = post_timtho.mathongtinthue
            inner join account_thue on account_thue.id_thue = thongtinthue.id_thue
            inner join quanlybaidang on quanlybaidang.ma_posttimtho = post_timtho.ma_posttimtho

            where thongtintho.id_tho = $id_tho";
        $result = $this->db->select($query);
        return $result;
    }
    public function insert_dathanhtoan()
    {
        $ma_posttimtho = $_POST['ma_posttimtho'];
        $mathongtintho = $_POST['mathongtintho'];
        $inputdrive = $_POST['drive'];
        $query = "INSERT INTO thanhtoan (ma_posttimtho, mathongtintho, drive) 
            VALUES ('$ma_posttimtho', '$mathongtintho', '$inputdrive')";
        $result = $this->db->insert($query);
        return $result;
    }

    public function select_post()
    {
        $query = "SELECT * FROM post, thongtintho, profile where thongtintho.id_tho = user_id and thongtintho.mathongtintho = profile.mathongtintho and ten <> ''";
        $result = $this->db->select($query);
        return $result;
    }


    public function select_post_from_user()
    {
        $query = "SELECT * FROM post, account_tho where account_tho.id_tho = post.user_id";
        $result = $this->db->select($query);
        return $result;
    }
    public function count_post()
    {
        $query = "SELECT COUNT(post_id) AS sl FROM post";
        $result = $this->db->select($query);
        return $result;
    }
    public function select_tacpham($mathongtintho)
    {
        $query = "SELECT * FROM post inner join thongtintho
            on post.user_id = thongtintho.id_tho
            where thongtintho.mathongtintho = $mathongtintho;";
        $result = $this->db->select($query);
        return $result;
    }
    public function select_luutin($mathongtintho)
    {
        $query = "SELECT * FROM thothichbaipost 
            inner join post_timtho on thothichbaipost.ma_posttimtho = post_timtho.ma_posttimtho
            inner join thongtinthue on thongtinthue.mathongtinthue = post_timtho.mathongtinthue
            where thothichbaipost.mathongtintho = $mathongtintho;";
        $result = $this->db->select($query);
        return $result;
    }
    public function insert_thuethichbaiprofile()
    {
        $ma_profile = $_POST['ma_profile'];
        $mathongtinthue = $_POST['mathongtinthue'];
        $query = "INSERT INTO thuethichbaiprofile (ma_profile, mathongtinthue)
            values ('$ma_profile', '$mathongtinthue')";
        $result = $this->db->insert($query);
        return $result;
    }
    public function select_thuethichbaiprofile($mathongtinthue)
    {
        $query = "SELECT *from thuethichbaiprofile
            inner join thongtinthue on thongtinthue.mathongtinthue = thuethichbaiprofile.mathongtinthue
            inner join profile on profile.ma_profile = thuethichbaiprofile.ma_profile
            inner join thongtintho on thongtintho.mathongtintho = profile.mathongtintho
            inner join account_thue on account_thue.id_thue = thongtinthue.id_thue
            where thongtinthue.mathongtinthue = $mathongtinthue;";
        $result = $this->db->select($query);
        return $result;
    }
    public function select_baidanhgia($mathongtintho)
    {
        $query = "SELECT *from thongtindanhgia
            inner join thongtinthue on thongtinthue.mathongtinthue = thongtindanhgia.mathongtinthue
            inner join thongtintho on thongtintho.mathongtintho = thongtindanhgia.mathongtintho
            inner join account_thue on account_thue.id_thue = thongtinthue.id_thue
            where thongtintho.mathongtintho = $mathongtintho;";
        $result = $this->db->select($query);
        return $result;
    }

    public function insert_post(){
        $image = $_FILES['image']['name'];
        $postTitle = $_POST['postTitle'];
        $postContent = $_POST['postContent'];
        $mathongtintho = $_POST['mathongtintho'];
        $query = "INSERT INTO `post`( `user_id`, `image`, `post_title`, `content`) VALUES ('$mathongtintho','$image','$postTitle','$postContent')";
        $result = $this->db->insert($query);
        return $result;
    }
    public function insert_baocaochoadmin(){
        $mathongtintho = $_POST['mathongtintho'];
        $ma_posttimtho = $_POST['ma_posttimtho'];
        $detail = $_POST['detail'];
        $drive = $_POST['drive'];
        $query = "INSERT INTO `baocaochoadmin`( `mathongtintho`, `ma_posttimtho`, `reason`, `drive`) VALUES ('$mathongtintho','$ma_posttimtho','$detail','$drive')";
        $result = $this->db->insert($query);
        return $result;
    }
    
}
?>