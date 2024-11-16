


<div class="contain">
        <div class="contain__main">
            <div class="contain__heading border-bottom">
                <div class="contain__heading-text">My account</div>
                <a href="index.php?act=signout" class="contain__heading-button button primary-button">Sign out</a>
            </div>
            <div class="contain__container">
                <div class="contain__sidebar grid-col-4">
                    <div class="contain__sidebar-info">
                        <div class="contain__sidebar-avatar">
                        <?php 
                            $userInfo = $user[0];
                            echo '<img class="contain__sidebar-img" src="'.$userInfo['avatar'].'" alt="">';
                        ?>
                            <div class="contain__sidebar-avtar-edit"><i class="fa-solid fa-camera"></i></div>
                        </div>
                        <?php 
                            $userInfo = $user[0];
                            echo '<div class="contain__sidebar-name">'.$userInfo['tennd'].'</div>';
                            echo '<div class="contian__sidebar-email">'.$userInfo['email'].'</div>';
                        ?>
                    </div>

                    <ul class="contain__sidebar-list">
                        <li><a href="" class="contain__sidebar-items items-select">Personal information</a></li>
                        <li><a href="" class="contain__sidebar-items">Billing & Payments</a></li>
                        <li><a href="" class="contain__sidebar-items">Order History</a></li>
                        <li><a href="" class="contain__sidebar-items">Gift Cards</a></li>
                    </ul>

                </div>
                <div class="contain__content grid-col-8">
                    <div class="contain__content-text">
                        <div class="contain__content-heading">Personal information</div>
                        <div class="contain__content-description">Manage your personal information, including phone numers and email adress where you can be contacted</div>
                    </div>
                    <div class="contain__content-userinfo">
                    <?php
                        // Lấy thông tin user đầu tiên (nếu có nhiều user thì cần thêm logic xử lý)
                        $userInfo = $user[0];

                        // Tạo mảng các thông tin cần hiển thị
                        $userDetails = [
                            ["title" => "Name", "sub" => $userInfo["tennd"], "icon" => "fa-solid fa-circle-user"],
                            ["title" => "Date of Birth", "sub" => $userInfo["ngaysinh"] ?? "Not provided", "icon" => "fa-regular fa-calendar-days"],
                            ["title" => "Country Region", "sub" => "TP.Ho Chi Minh, Viet Nam", "icon" => "fa-solid fa-globe"],
                            ["title" => "Language", "sub" => "Vietnamese", "icon" => "fa-brands fa-angular"],
                            ["title" => "Contactable at", "sub" => $userInfo["email"], "icon" => "fa-solid fa-envelope"]
                        ];

                        // Tạo HTML từ mảng thông tin
                        foreach ($userDetails as $detail) {
                            echo '
                            <div class="contain__content-userinfo-items">
                                <div class="contain__content-userinfo-title">' . htmlspecialchars($detail["title"]) . '</div>
                                <div class="contain__content-userinfo-sub">' . htmlspecialchars($detail["sub"]) . '</div>
                                <div class="contain__content-userinfo-icon"><i class="' . htmlspecialchars($detail["icon"]) . '"></i></div>
                            </div>
                            ';
                        }
                        ?>

                        


                        <!-- <div class="contain__content-userinfo-items">
                            <div class="contain__content-userinfo-title">Name</div>
                            <div class="contain__content-userinfo-sub">Chế Nhật Tân</div>
                            <div class="contain__content-userinfo-icon"><i class="fa-solid fa-circle-user"></i></div>
                        </div>
                        <div class="contain__content-userinfo-items">
                            <div class="contain__content-userinfo-title">Date of Birth</div>
                            <div class="contain__content-userinfo-sub">28 May 2004</div>
                            <div class="contain__content-userinfo-icon"><i class="fa-regular fa-calendar-days"></i></div>
                        </div>
                        <div class="contain__content-userinfo-items">
                            <div class="contain__content-userinfo-title">Country Region</div>
                            <div class="contain__content-userinfo-sub">TP.Ho Chi Minh, Viet Nam</div>
                            <div class="contain__content-userinfo-icon"><i class="fa-solid fa-globe"></i></div>
                        </div>
                        <div class="contain__content-userinfo-items">
                            <div class="contain__content-userinfo-title">Languange</div>
                            <div class="contain__content-userinfo-sub">Vietnamese</div>
                            <div class="contain__content-userinfo-icon"><i class="fa-brands fa-angular"></i></div>
                        </div>
                        <div class="contain__content-userinfo-items">
                            <div class="contain__content-userinfo-title">Contactable at</div>
                            <div class="contain__content-userinfo-sub">chenhattan280504@gmail.com</div>
                            <div class="contain__content-userinfo-icon"><i class="fa-solid fa-envelope"></i></div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>