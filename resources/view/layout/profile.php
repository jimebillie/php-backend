<div class="wrap_profile">
    <div class="wrap_profile_img">
        <img style="cursor: pointer" src="<?= get_path_env_billie_template() ?>image-dashboard/Admin.png"
             alt="Profile Image" billie-gallery="รูปโปรไฟล์">
    </div>
    <div class="wrap_profile_name">
        <div class="mb-0 status_login">
            <i class="fa-solid fa-circle text-success me-1" style="font-size: xx-small"></i>Online
        </div>
        <div class="wrap_name">
            <!--Detail Profile-->
            <div class="mb-0 name">
                <span class="wrap_i_dropdown"><i class="fa-solid fa-chevron-down me-1"></i></span>
                Admin
            </div>
            <div class="wrap_box_detail_profile_name" disP-event="hide">
                <div class="p-3">
                    <div class="mb-1"><b>สถานะ : </b>
                        <span class="badge border rounded-pill bg-success">
                            Online
                        </span>
                    </div>
                    <div class="mb-1"><b>ชื่อผู้ใช้ : </b><?=$_SESSION["auth_success"]['username']?></div>
                    <div class="mb-2"><b>Role : </b><span><?=$_SESSION["auth_success"]['role']?></span></div>
                    <hr>
                    <div class="mb-1 w-100 btn btn-secondary">
                        <a class="text-white text-decoration-none" href="api/logout">
                            <i class="fa-solid fa-arrow-right-from-bracket"></i>
                            ออกจากระบบ
                        </a>
                    </div>
                </div>
            </div>
            <!--\.Detail Profile-->
        </div>
    </div>
</div>