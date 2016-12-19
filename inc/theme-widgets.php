<?php

/**         
 * Local video widget
 * Uload video into server
 */
 
class ATMA_Video extends WP_Widget {

	/**
	 * Register widget with WordPress.
	 */
	function __construct() {
		parent::__construct(
			'atma_video',
			esc_html__( '&bull; ATMA Video Widget', 'atma' ),
			array( 'description' => esc_html__( 'A Video Widget', 'atma' ), )
		);
	}

	/**
	 * Front-end display of widget.
	 */
	public function widget( $args, $instance ) {
		echo $args['before_widget'];
		if ( ! empty( $instance['title'] ) ) {
			echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ) . $args['after_title'];
		}
    if ( isset( $instance['video_url'] ) ) {
      $video_url = $instance['video_url'];
    }
		?>
      <video controls>
        <source src="<?php echo $instance['video_url']; ?>" type="video/mp4">
      </video>
    <?php
		echo $args['after_widget'];
	}

	/**
	 * Back-end widget form.
	 */
	public function form( $instance ) {

		$title = ! empty( $instance['title'] ) ? $instance['title'] : esc_html__( 'Video Title', 'atma' );

    $video_url = $instance['video_url'];

		?>
		<p>
		  <label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_attr_e( 'Title:', 'atma' ); ?></label> 
		  <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
		</p>
    <p>
      <label for="<?php echo esc_attr( $this->get_field_id( 'video_url' ) ); ?>"><?php esc_attr_e( 'Video URL:', 'atma' ); ?></label> 
      <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'video_url' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'video_url' ) ); ?>" type="text" value="<?php echo esc_attr( $video_url ); ?>">
    </p>
		<?php 
	}

	/**
	 * Sanitize widget form values as they are saved.
	 */
	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
    $instance['video_url'] = ( ! empty( $new_instance['video_url'] ) ) ? strip_tags( $new_instance['video_url'] ) : '';

		return $instance;
	}

}

function register_atma_video_widget() {
  register_widget( 'ATMA_Video' );
}
add_action( 'widgets_init', 'register_atma_video_widget' );

/**         
 * Youtube video widget
 * video from youtube.com
 */
 
class ATMA_YouTube extends WP_Widget {

	/**
	 * Register widget with WordPress.
	 */
	function __construct() {
		parent::__construct(
			'atma_youtube',
			esc_html__( '&bull; ATMA YouTube Widget', 'atma' ),
			array( 'description' => esc_html__( 'A YouTube Video Widget.', 'atma' ), )
		);
	}

	/**
	 * Front-end display of widget.
	 */
	public function widget( $args, $instance ) {
		echo $args['before_widget'];
		if ( ! empty( $instance['title'] ) ) {
			echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ) . $args['after_title'];
		}
    if ( isset( $instance['video_id'] ) ) {
      $video_id = $instance['video_id'];
    }
		?>
      <iframe src="https://www.youtube.com/embed/<?php echo $instance['video_id']; ?>"></iframe>
    <?php
		echo $args['after_widget'];
	}

	/**
	 * Back-end widget form.
	 */
	public function form( $instance ) {

		$title = ! empty( $instance['title'] ) ? $instance['title'] : esc_html__( 'Video Title', 'atma' );

    $video_id = $instance['video_id'];

		?>
		<p>
		  <label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_attr_e( 'Title:', 'atma' ); ?></label> 
		  <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
		</p>
    <p>
      <label for="<?php echo esc_attr( $this->get_field_id( 'video_id' ) ); ?>"><?php esc_attr_e( 'Video ID:', 'atma' ); ?></label> 
      <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'video_id' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'video_id' ) ); ?>" type="text" value="<?php echo esc_attr( $video_id ); ?>">
    </p>
    <p>
      <em>Copy id only eg. https://youtu.be/E4CPZZhw-9Q, id: "E4CPZZhw-9Q"</em>
    </p>
		<?php 
	}

	/**
	 * Sanitize widget form values as they are saved.
	 */
	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
    $instance['video_id'] = ( ! empty( $new_instance['video_id'] ) ) ? strip_tags( $new_instance['video_id'] ) : '';

		return $instance;
	}

}

function register_atma_youtube_widget() {
  register_widget( 'ATMA_YouTube' );
}
add_action( 'widgets_init', 'register_atma_youtube_widget' );