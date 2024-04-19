<!DOCTYPE html>
<html>
<head>
	<title>HOTEL_BOOKING</title>
	<!-- CSS only -->
<?php require('inc/links.php'); ?>
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"
/>
<link rel="stylesheet" type="text/css" href="css/common.css">
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>


</head>
<body>

<?php require('inc/header.php'); ?>

<div class="my-5 px-4">
  <h2 class="fw-bold h-font text-center">LIÊN HỆ</h2>

  <div class="h-line bg-dark"></div>
</div>

<div class="container">
  <div class="row">
    <div class="col-lg-6 col-md-6 mb-5 px-4">
      <div class="bg-white rounded shadow p-4">
      <iframe class="w-100 rounded mb-4" height="320px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.427642206537!2d106.78279807434211!3d10.855042689298562!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317527c3debb5aad%3A0x5fb58956eb4194d0!2zxJDhuqFpIEjhu41jIEh1dGVjaCBLaHUgRQ!5e0!3m2!1svi!2s!4v1712907564429!5m2!1svi!2s" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> 
        <h5>Địa chỉ</h5>
        <a href="https://maps.app.goo.gl/nLqCrDsYyNW9uN2J7" target="_blank" class="d-inline-block text-decoration-none text-dark mb-2">
          <i class="bi bi-geo-alt-fill"></i> VQ4P+249, Phường Tân Phú, Quận 9, Thành phố Hồ Chí Minh, Việt Nam. (HUTECH)
        </a>
        <h5 class="mt-4">Gọi Cho tôi</h5>
        <a href="tel: +840336708748" class="d-inline-block mb-2 text-decoration-none text-dark"><i class="bi bi-telephone-fill"></i> +84 336708748</a>
        <br>
        <a href="tel: +840336708748" class="d-inline-block mb-2 text-decoration-none text-dark"><i class="bi bi-telephone-fill"></i> +84 336708748</a>
        <h5 class="mt-4">Email</h5>
        <a href="mailto: thanhbinhqns04@gmail.com" class="d-inline-block mb-2 text-decoration-none text-dark"><i class="bi bi-envelope-fill"></i> thanhbinhqns04@gmail.com</a>

        <h5 class="mt-4">Follow</h5>
        <a href="#" class="d-inline-block text-dark fs-5 me-2">
            <i class="bi bi-twitter me-1"></i>
        </a>
        
        <a href="#" class="d-inline-block text-dark fs-5 me-2">
            <i class="bi bi-facebook me-1"></i>
        </a>
        
        <a href="#" class="d-inline-block text-dark fs-5">
          <i class="bi bi-instagram me-1"></i>
          
        </a>
      </div>
    </div>
    <div class="col-lg-6 col-md-6 mb-5 px-4">
      <div class="bg-white rounded shadow p-4">
        <form>
          <h5>Gửi tin nhắn</h5>
          <div class="mb-3">
          <label class="form-label" style="font-weight: 500;">Tên</label>
          <input type="text" class="form-control shadow-none">
          </div>
          <div class="mb-3">
          <label class="form-label" style="font-weight: 500;">Email</label>
          <input type="email" class="form-control shadow-none">
          </div>
          <div class="mb-3">
          <label class="form-label" style="font-weight: 500;">Tiêu đề</label>
          <input type="text" class="form-control shadow-none">
          </div>
          <div class="mb-3">
          <label class="form-label" style="font-weight: 500;">Nội dung</label>
          <textarea class="form-control shadow-none" rows="5" style="resize: none;"></textarea>
          </div>
          <button type="submit" class="btn text-white custom-bg mt-3">Gửi</button>
        </form>
      </div>
    </div>
</div>
    
  </div>
</div>

<?php require('inc/footer.php'); ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>