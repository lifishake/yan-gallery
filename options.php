<?php

/**
 * 配置画面
 * since 0.0.1
*/

add_action( 'admin_menu', 'yangallery_add_admin_menu' );
add_action( 'admin_init', 'yangallery_settings_init' );


function yangallery_add_admin_menu(  ) {
	$myicon = "PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pg0KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDE5LjAuMCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPg0KPHN2ZyB2ZXJzaW9uPSIxLjEiIGlkPSJMYXllcl8xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB4PSIwcHgiIHk9IjBweCINCgkgdmlld0JveD0iMCAwIDIxNC4yMDEgMjE0LjIwMSIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgMjE0LjIwMSAyMTQuMjAxOyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSI+DQo8Zz4NCgk8Zz4NCgkJPGc+DQoJCQk8cGF0aCBkPSJNMTk0LjM2OCwwSDMxLjczNGMtMi4xOSwwLTMuOTY3LDEuNzc0LTMuOTY3LDMuOTY3djE1Ljg2N2gtMTEuOXY3LjkzM2gxMS45djE1Ljg2N2gtMTEuOXY3LjkzM2gxMS45djE1Ljg2N2gtMTEuOXY3LjkzMw0KCQkJCWgxMS45djE1Ljg2N2gtMTEuOXY3LjkzM2gxMS45djE1Ljg2N2gtMTEuOXY3LjkzM2gxMS45djE1Ljg2N2gtMTEuOXY3LjkzM2gxMS45djE1Ljg2N2gtMTEuOXY3LjkzM2gxMS45djE1Ljg2N2gtMTEuOXY3LjkzMw0KCQkJCWgxMS45djE1Ljg2N2MwLDIuMTkyLDEuNzc2LDMuOTY3LDMuOTY3LDMuOTY3aDE2Mi42MzNjMi4xOSwwLDMuOTY3LTEuNzc0LDMuOTY3LTMuOTY3VjMuOTY3QzE5OC4zMzQsMS43NzQsMTk2LjU1OCwwLDE5NC4zNjgsMHoNCgkJCQkgTTE5MC40MDEsMjA2LjI2N2gtMTU0Ljd2LTExLjloMTEuOXYtNy45MzNoLTExLjl2LTE1Ljg2N2gxMS45di03LjkzM2gtMTEuOXYtMTUuODY3aDExLjl2LTcuOTMzaC0xMS45di0xNS44NjdoMTEuOXYtNy45MzMNCgkJCQloLTExLjlWOTkuMTY3aDExLjl2LTcuOTMzaC0xMS45Vjc1LjM2N2gxMS45di03LjkzM2gtMTEuOVY1MS41NjdoMTEuOXYtNy45MzNoLTExLjlWMjcuNzY3aDExLjl2LTcuOTMzaC0xMS45di0xMS45aDE1NC43DQoJCQkJVjIwNi4yNjd6Ii8+DQoJCQk8cGF0aCBkPSJNNTkuNTAxLDk5LjE2N2gxMS45aDI3Ljc2N2gyNy43NjdoNDcuNmMyLjE5LDAsMy45NjctMS43NzQsMy45NjctMy45NjdWMzEuNzMzYzAtMi4xOTItMS43NzYtMy45NjctMy45NjctMy45NjdINTkuNTAxDQoJCQkJYy0yLjE5LDAtMy45NjcsMS43NzQtMy45NjcsMy45NjdWOTUuMkM1NS41MzQsOTcuMzkyLDU3LjMxMSw5OS4xNjcsNTkuNTAxLDk5LjE2N3ogTTc3LjQ2NSw5MS4yMzNsNy44MTktMTcuODY5bDcuODE5LDE3Ljg2OQ0KCQkJCUg3Ny40NjV6IE0xMDUuMjMyLDkxLjIzM2w3LjgxOS0xNy44NjlsNy44MTksMTcuODY5SDEwNS4yMzJ6IE02My40NjgsMzUuN2gxMDcuMXY1NS41MzNoLTQxLjA0bC0xMi44NDMtMjkuMzU1DQoJCQkJYy0wLjYzMi0xLjQ0NS0yLjA1Ny0yLjM3OC0zLjYzMy0yLjM3OGMtMS41NzcsMC0zLjAwMiwwLjkzNC0zLjYzMywyLjM3OGwtMTAuMjUsMjMuNDI4bC0xMC4yNS0yMy40MjgNCgkJCQljLTAuNjMxLTEuNDQ1LTIuMDU3LTIuMzc5LTMuNjMzLTIuMzc5Yy0xLjU3NiwwLTMuMDAyLDAuOTM0LTMuNjMzLDIuMzc4TDY4LjgwOCw5MS4yMzNoLTUuMzRWMzUuN3oiLz4NCgkJCTxwYXRoIGQ9Ik01OS41MDEsMTkwLjRoNTEuNTY3aDUxLjU2N2gxMS45YzIuMTksMCwzLjk2Ny0xLjc3NCwzLjk2Ny0zLjk2N3YtNjMuNDY3YzAtMi4xOTItMS43NzYtMy45NjctMy45NjctMy45NjdINTkuNTAxDQoJCQkJYy0yLjE5LDAtMy45NjcsMS43NzQtMy45NjcsMy45Njd2NjMuNDY3QzU1LjUzNCwxODguNjI2LDU3LjMxMSwxOTAuNCw1OS41MDEsMTkwLjR6IE0xMTguODI1LDE4Mi40NjdsMTguMDI2LTI0Ljk1OA0KCQkJCWwxOC4wMjYsMjQuOTU4SDExOC44MjV6IE02My40NjgsMTI2LjkzM2gxMDcuMXY1NS41MzNoLTUuOTA0bC0yNC41OTctMzQuMDU3Yy0xLjQ5MS0yLjA2MS00LjkzOS0yLjA2MS02LjQzLDBsLTI0LjU5NywzNC4wNTcNCgkJCQlINjMuNDY4VjEyNi45MzN6Ii8+DQoJCQk8cGF0aCBkPSJNMTQ2Ljc2OCw3MS40YzguNzQ5LDAsMTUuODY3LTcuMTE2LDE1Ljg2Ny0xNS44NjdjMC04Ljc1MS03LjExOC0xNS44NjctMTUuODY3LTE1Ljg2Nw0KCQkJCWMtOC43NDksMC0xNS44NjcsNy4xMTYtMTUuODY3LDE1Ljg2N0MxMzAuOTAxLDY0LjI4NCwxMzguMDE5LDcxLjQsMTQ2Ljc2OCw3MS40eiBNMTQ2Ljc2OCw0Ny42YzQuMzc1LDAsNy45MzMsMy41Niw3LjkzMyw3LjkzMw0KCQkJCWMwLDQuMzczLTMuNTU4LDcuOTMzLTcuOTMzLDcuOTMzcy03LjkzMy0zLjU2LTcuOTMzLTcuOTMzQzEzOC44MzUsNTEuMTYsMTQyLjM5Miw0Ny42LDE0Ni43NjgsNDcuNnoiLz4NCgkJCTxwYXRoIGQ9Ik04Ny4yNjgsMTMwLjljLTguNzQ5LDAtMTUuODY3LDcuMTE2LTE1Ljg2NywxNS44NjdjMCw4Ljc1MSw3LjExOCwxNS44NjcsMTUuODY3LDE1Ljg2Nw0KCQkJCWM4Ljc0OSwwLDE1Ljg2Ny03LjExNiwxNS44NjctMTUuODY3QzEwMy4xMzQsMTM4LjAxNiw5Ni4wMTcsMTMwLjksODcuMjY4LDEzMC45eiBNODcuMjY4LDE1NC43Yy00LjM3NSwwLTcuOTMzLTMuNTYtNy45MzMtNy45MzMNCgkJCQljMC00LjM3MywzLjU1OC03LjkzMyw3LjkzMy03LjkzM3M3LjkzMywzLjU2LDcuOTMzLDcuOTMzQzk1LjIwMSwxNTEuMTQsOTEuNjQzLDE1NC43LDg3LjI2OCwxNTQuN3oiLz4NCgkJPC9nPg0KCTwvZz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjwvc3ZnPg0K";
	add_menu_page( '恹相册', '恹相册', 'manage_options', __FILE__, 'yangallery_options_page', 'data:image/svg+xml;base64,' . $myicon );

}

/**
 * Settings section display callback.
 *
 * @param array $args Display arguments.
 */
function yangallery_callback_function( $args ) {
    // echo section intro text here
    echo '<p>id: ' . esc_html( $args['id'] ) . '</p>';                         // id: eg_setting_section
    echo '<p>title: ' . apply_filters( 'the_title', $args['title'] ) . '</p>'; // title: Example settings section in reading
    echo '<p>callback: ' . esc_html( $args['callback'] ) . '</p>';             // callback: eg_setting_section_callback_function
}


function yangallery_settings_init(  ) {

	register_setting( 'MainOption', 'yangallery_settings' );
	register_setting( 'PicManager', 'yangallery_settings' );

	add_settings_section(
		'yangallery_MainOption_section',
		'相册设定',
		'yangallery_callback_function',
		'MainOption'
	);
	add_settings_section(
		'yangallery_PicManager_section',
		'图片管理',
		'yangallery_callback_function',
		'PicManager'
	);
	add_settings_section(
		'yangallery_DataChecker_section',
		'数据维护',
		'yangallery_callback_function',
		'DataChecker'
	);

	add_settings_field(
		'yangallery_path_setting_field',
		'目录设定',
		'yangallery_path_setting_field_render',
		'MainOption',
		'yangallery_MainOption_section'
	);

	add_settings_field(
		'yangallery_pic_manager_field',
		'图片管理',
		'yangallery_pic_manager_field_render',
		'PicManager',
		'yangallery_PicManager_section'
	);

	add_settings_field(
		'yangallery_data_checker_field',
		'数据维护',
		'yangallery_data_checker_field_render',
		'DataChecker',
		'yangallery_DataChecker_section'
	);


}


function yangallery_path_setting_field_render(  ) {

	$options = get_option( 'yangallery_settings' );
	?>
	<p>总路径，一个标题一个输入，默认gallery</p>
	<br />
	<input type='text' name='yangallery_settings[gallery_path]' value='<?php echo $options['gallery_path']; ?>' /><br />
	<p>关联特色图的路径</p>
	<br />
	<input type='text' name='yangallery_settings[featured_path]' value='<?php echo $options['featured_path']; ?>' /><br />
	<p>排序方式</p>
	<br />
	<input type='text' name='yangallery_settings[orderby]' value='<?php echo $options['orderby']; ?>' /><br/>
	<?php

}


function yangallery_pic_manager_field_render(  ) {

	$options = get_option( 'yangallery_settings' );
	?>
	<textarea cols='40' rows='5' name='yangallery_settings[wp_pcd_textarea_field_1]'>
		<?php echo $options['wp_pcd_textarea_field_1']; ?>
 	</textarea>
	<?php

}

function yangallery_data_checker_field_render(  ) {

	$options = get_option( 'yangallery_settings' );
	?>
	<textarea cols='40' rows='15' name='yangallery_settings[wp_pcd_textarea_field_2]'>
		<?php echo $options['wp_pcd_textarea_field_2']; ?>
 	</textarea>
	<?php

}

function yangallery_options_page(  ) {
    if( isset( $_GET[ 'tab' ] ) ) {
        $active_tab = $_GET[ 'tab' ];
    } else {
        $active_tab = 'tab_1';
    }
	?>
    <h2 class="nav-tab-wrapper">
        <a href="?page=<?php echo __FILE__;?>&tab=tab_1" class="nav-tab <?php echo $active_tab == 'tab_1' ? 'nav-tab-active' : ''; ?>">基本设定</a>
        <a href="?page=<?php echo __FILE__;?>&tab=tab_2" class="nav-tab <?php echo $active_tab == 'tab_2' ? 'nav-tab-active' : ''; ?>">管理</a>
		<a href="?page=<?php echo __FILE__;?>&tab=tab_3" class="nav-tab <?php echo $active_tab == 'tab_3' ? 'nav-tab-active' : ''; ?>">数据维护</a>
    </h2>
	<form action='options.php' method='post'>

	<h2>恹相册</h2>

		<?php
        if( $active_tab == 'tab_1' ) {
			settings_fields( 'MainOption' );
			do_settings_sections( 'MainOption' );
		}
		else if( $active_tab == 'tab_2' ) {
			settings_fields( 'PicManager' );
			do_settings_sections( 'PicManager' );
		}
		else if( $active_tab == 'tab_3' ) {
			settings_fields( 'DataChecker' );
			do_settings_sections( 'DataChecker' );
		}
		submit_button();
		?>

	</form>
	<?php

}

?>
