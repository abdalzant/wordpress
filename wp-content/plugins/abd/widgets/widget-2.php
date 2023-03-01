<?php


class Elementor_Test_Wid extends \Elementor\Widget_Base
{

	public function get_name()
	{
		return 'card_with_image';
	}

	public function get_title()
	{
		return esc_html__('Card With Image', 'myplugin');
	}

	public function get_icon()
	{
		return 'eicon-image-box';
	}



	public function get_categories()
	{
		return ['general'];
	}

	public function get_keywords()
	{
		return ['card', 'image'];
	}


	protected function register_controls()
	{

		$this->start_controls_section(
			'content_section',
			[
				'label' => esc_html__('Content', 'myplugin'),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'heading',
			[
				'type' => \Elementor\Controls_Manager::TEXT,
				'label' => esc_html__('Name', 'myplugin'),
				'placeholder' => esc_html__('Enter the Name', 'myplugin'),
			]
		);

		$this->end_controls_section();




		$this->start_controls_section(
			'content_section',
			[
				'label' => esc_html__('Current job', 'myplugin'),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'description',
			[
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'label' => esc_html__('Current job', 'myplugin'),
				'placeholder' => esc_html__('Enter the Current job', 'myplugin'),
			]
		);

		$this->end_controls_section();




		$this->start_controls_section(
			'section_title_style',
			[
				'label' => esc_html__('content style', 'myplugin'),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'content style',
			[
				'type' => \Elementor\Controls_Manager::COLOR,
				'label' => esc_html__('TEXT COLOR', 'myplugin'),
				'selectors' => [
					'{{WRAPPER}} #yahya,h4' => 'color: {{VALUE}}',
				],
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'section_image',
			[
				'label' => esc_html__('Image', 'myplugin'),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'image',
			[
				'label' => esc_html__('Choose Image', 'myplugin'),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);



		$this->end_controls_section();






		$this->start_controls_section(
			'section_icon',
			[
				'label' => esc_html__('Icons', 'myplugin'),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'icon1',
			[
				'label' => esc_html__('Social Icons', 'textdomain'),
				'type' => \Elementor\Controls_Manager::ICON,
				'include' => [
					'fa fa-facebook',
					'fa fa-flickr',
					'fa fa-google-plus',
					'fa fa-instagram',
					'fa fa-linkedin',
					'fa fa-pinterest',
					'fa fa-reddit',
					'fa fa-twitch',
					'fa fa-twitter',
					'fa fa-vimeo',
					'fa fa-youtube',
				],
				'default' => 'fa fa-facebook',
			]
		);
		$this->add_control(
			'website_link1',
			[
				'label' => esc_html__('Link', 'textdomain'),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => esc_html__('https://your-link.com', 'textdomain'),
				'options' => ['url', 'is_external', 'nofollow'],
				'default' => [
					'url' => '',
					'is_external' => true,
					'nofollow' => true,
					// 'custom_attributes' => '',
				],
				'label_block' => true,
			]
		);
		$this->add_control(
			'icon2',
			[
				'label' => esc_html__('Social Icons', 'textdomain'),
				'type' => \Elementor\Controls_Manager::ICON,
				'include' => [
					'fa fa-facebook',
					'fa fa-flickr',
					'fa fa-google-plus',
					'fa fa-instagram',
					'fa fa-linkedin',
					'fa fa-pinterest',
					'fa fa-reddit',
					'fa fa-twitch',
					'fa fa-twitter',
					'fa fa-vimeo',
					'fa fa-youtube',
				],
				'default' => 'fa fa-facebook',
			]
		);
		$this->add_control(
			'website_link2',
			[
				'label' => esc_html__('Link', 'textdomain'),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => esc_html__('https://your-link.com', 'textdomain'),
				'options' => ['url', 'is_external', 'nofollow'],
				'default' => [
					'url' => '',
					'is_external' => true,
					'nofollow' => true,
					// 'custom_attributes' => '',
				],
				'label_block' => true,
			]
		);
		$this->add_control(
			'icon3',
			[
				'label' => esc_html__('Social Icons', 'textdomain'),
				'type' => \Elementor\Controls_Manager::ICON,
				'include' => [
					'fa fa-facebook',
					'fa fa-flickr',
					'fa fa-google-plus',
					'fa fa-instagram',
					'fa fa-linkedin',
					'fa fa-pinterest',
					'fa fa-reddit',
					'fa fa-twitch',
					'fa fa-twitter',
					'fa fa-vimeo',
					'fa fa-youtube',
				],
				'default' => 'fa fa-facebook',
			]
		);
		$this->add_control(
			'website_link3',
			[
				'label' => esc_html__('Link', 'textdomain'),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => esc_html__('https://your-link.com', 'textdomain'),
				'options' => ['url', 'is_external', 'nofollow'],
				'default' => [
					'url' => '',
					'is_external' => true,
					'nofollow' => true,
					// 'custom_attributes' => '',
				],
				'label_block' => true,
			]
		);
	}

	protected function render()
	{
		$settings = $this->get_settings_for_display();
		if (!empty($settings['website_link1']['url'])) {
			$this->add_link_attributes('website_link1', $settings['website_link1']);
		}
		if (!empty($settings['website_link2']['url'])) {
			$this->add_link_attributes('website_link2', $settings['website_link2']);
		}
		if (!empty($settings['website_link3']['url'])) {
			$this->add_link_attributes('website_link3', $settings['website_link3']);
		}

?>

		<section class="team section" style="padding: 10px 5px;">

			<div class=" wow fadeInUp" data-wow-delay=".4s">

				<div class="single-team">
					<div class="team-image">
						<?php echo '<img src="' . esc_url($settings['image']['url']) . '" alt="">'; ?>
					</div>
					<div class="content">
						<h4><?php echo $settings['heading'] ?>
							<span id="yahya"><?php echo $settings['description'] ?></span>
						</h4>
						<ul class="social">
							<li><a <?php echo $this->get_render_attribute_string('website_link1'); ?>><i class="<?php echo esc_attr($settings['icon1']); ?>"></i></a></li>
							<li><a <?php echo $this->get_render_attribute_string('website_link2'); ?>><i class="<?php echo esc_attr($settings['icon2']); ?>"></i></a></li>
							<li><a <?php echo $this->get_render_attribute_string('website_link3'); ?>><i class="<?php echo esc_attr($settings['icon3']); ?>"></i></a></li>
						</ul>
					</div>
				</div>

			</div>
		</section>
<?php
	}
}
