<div class="wrap tainacan-page-container-content">
	<div class="tainacan-fixed-subheader">
		<h1 class="tainacan-page-title">
			<?php _e('My profile', 'tainacan-profile'); ?>
		</h1>
	</div>
	<div class="tainacan-profile">
       <div class="tainacan-profile-user-info">
            <div class="tainacan-profile-user-avatar">
                <?php echo get_avatar( get_current_user_id(), 42 ); ?>
            </div>
            <div class="tainacan-profile-user-name">
                <h2><?php echo get_the_author_meta('display_name', get_current_user_id()); ?></h2>
            </div>
            <div class="tainacan-profile-user-email">
                <p><em><?php echo get_the_author_meta('user_email', get_current_user_id()); ?></em></p>
            </div>
            <div class="tainacan-profile-user-role">
                <?php 
                    $user_roles = get_the_author_meta('roles', get_current_user_id());
                    $user_roles = is_array($user_roles) ? $user_roles : [];
                    foreach ($user_roles as $role) {
                        echo '<p>' . $role . '</p>';
                    }
                ?>
            </div>
            <div class="tainacan-profile-user-description">
                <p><?php echo get_the_author_meta('description', get_current_user_id()); ?></p>
            </div>
        </div>
        <div class="tainacan-profile-user-edit">
            <a href="<?php echo get_edit_user_link(); ?>" class="button button-primary"><?php _e('Edit profile', 'tainacan-profile'); ?></a>
        </div>
    </div>
</div>