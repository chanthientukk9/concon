<style>
.zb {
	background: #fbb860;
	margin:0;
}
.zb:hover {
	background: #f99b1f;
}
</style>
<?php

zerif_before_our_team_trigger();

echo '<section style="padding:0px;" class="focus" id="team">';

	zerif_top_our_team_trigger();

	/*echo '<div class="container" style="padding:0px;">';*/
		echo '<div class="partner-user-wrap">';
			echo '<div style="background: linear-gradient(to right, rgba(51,83,92,.7) 0%, rgba(51,83,92,.7) 100%), url(\'http://concon.vn/wp-content/uploads/2016/08/Page-banner2.jpg\') no-repeat;background-size: 100% 100%;" class="partner-user">';
				echo '<i class="fa fa-user-md"></i>';
				echo '<h3>Đối Tác</h3><br>';
				echo '<p style="min-height:150px;line-height:30px;margin-bottom:0px;">LinkCare tạo nên sự tương tác trực tiếp giữa Bác sĩ, Điều dưỡng và người dùng dựa trên lịch hẹn tương ứng với sự sắp xếp thời gian làm việc của Bác sĩ, Điều dưỡng trên ứng dụng.</p><br>';
				echo '<a href="/partners" class="zb btn btn-primary custom-button red-btn">Đọc thêm</a>';
			echo '</div>';

			echo '<div style="background: linear-gradient(to right, rgba(51,83,92,.7) 0%, rgba(51,83,92,.7) 100%), url(\'http://concon.vn/wp-content/uploads/2016/08/user-box-bg.jpg\') no-repeat;background-size: 100% 100%;" class="partner-user">';
				echo '<i class="fa fa-user"></i>';
				echo '<h3>Người Dùng</h3><br>';
				echo '<p style="min-height:150px;line-height:30px;margin-bottom:0px;">Với sứ mệnh đem tiện ích y tế đến cộng đồng, LinkCare kết nối Bác sĩ, Điều dưỡng đến khám - chữa bệnh tại nhà theo yêu cầu của người dùng qua các thao tác đặt lịch hẹn trên ứng dụng.</p><br>';
				echo '<a href="/users" class="zb btn btn-primary custom-button red-btn">Đọc thêm</a>';
			echo '</div>';
		echo '</div>';
		echo '<div style="display:none;background: linear-gradient(to right, rgba(51,83,92,.7) 0%, rgba(51,83,92,.7) 100%), url(\'https://www.tnooz.com/wp-content/uploads/2013/12/shutterstock_163431020-690x300.jpg\') no-repeat;background-size: cover;" class="footer-download">';
			echo '<h3>CÀI ĐẶT LINKCARE NGAY HÔM NAY</h3>';
			echo '<a href="#modal1" class="btn btn-primary custom-button blue-btn">Download</a>';
		echo '</div>';
	/*echo '</div>';*/

	zerif_bottom_our_team_trigger();

echo '</section>';

zerif_after_our_team_trigger();
?>