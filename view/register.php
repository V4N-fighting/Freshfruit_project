<div class="contain">
        <div class="main">
            <form action="index.php?act=registerform" method="POST" class="form" id="form-1">
              <h3 class="heading">Register</h3>
              <h3 class="heading"> Your Account</h3>
              <p class="desc">Lorem ipsum dolor, sit amet consectetur adipisicing elit.Sit aliquid, Non distinctio vel iste.</p>
      
              <div class="spacer"></div>
      
              <div class="form-group">
                <label for="fullname" class="form-label">Tên đầy đủ</label>
                <input id="fullname" name="fullname" type="text" placeholder="VD: Lương Lã Lướt" class="form-control">
                <span class="form-message"></span>
              </div>
      
              <div class="form-group">
                <label for="email" class="form-label">Email</label>
                <input id="email" name="email" type="text" placeholder="VD: email@domain.com" class="form-control">
                <span class="form-message"></span>
              </div>
      
              <div class="form-group">
                <label for="password" class="form-label">Mật khẩu</label>
                <input id="password" name="password" type="password" placeholder="Nhập mật khẩu" class="form-control">
                <span class="form-message"></span>
              </div>
      
              <!-- <div class="form-group">
                <label for="password_confirmation" class="form-label">Nhập lại mật khẩu</label>
                <input id="password_confirmation" name="password_confirmation" placeholder="Nhập lại mật khẩu" type="password" class="form-control">
                <span class="form-message"></span>
              </div> -->
      
              <input type="submit" class="form-submit" name="register" value="Đăng ký">
            </form>

            <a href="index.php?act=login" class="have__account">HAVE AN ACCOUNT?</a>
        </div>
    </div>