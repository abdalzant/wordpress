<?php


class Elementor_Test_Widget extends \Elementor\Widget_Base
{

	public function get_name()
	{
		return 'card_with_icon';
	}

	public function get_title()
	{
		return esc_html__('Card With Icon', 'myplugin');
	}

	public function get_icon()
	{
		return 'eicon-code';
	}



	public function get_categories()
	{
		return ['general'];
	}

	public function get_keywords()
	{
		return ['card', 'icon'];
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
				'label' => esc_html__('Heading', 'myplugin'),
				'placeholder' => esc_html__('Enter the heading', 'myplugin'),
			]
		);

		$this->end_controls_section();





		$this->start_controls_section(
			'content_section',
			[
				'label' => esc_html__('Description', 'myplugin'),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'description',
			[
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'label' => esc_html__('content_section', 'myplugin'),
				'placeholder' => esc_html__('Enter the content_section', 'myplugin'),
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'style_section',
			[
				'label' => esc_html__('Align', 'textdomain'),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'text_align',
			[
				'label' => esc_html__('Alignment', 'textdomain'),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'options' => [
					'left' => [
						'title' => esc_html__('Left', 'textdomain'),
						'icon' => 'eicon-text-align-left',
					],
					'center' => [
						'title' => esc_html__('Center', 'textdomain'),
						'icon' => 'eicon-text-align-center',
					],
					'right' => [
						'title' => esc_html__('Right', 'textdomain'),
						'icon' => 'eicon-text-align-right',
					],
				],
				'default' => 'center',
				'toggle' => true,
				'selectors' => [
					'{{WRAPPER}} .your-class' => 'text-align: {{VALUE}};',
				],
			]
		);
		$this->end_controls_section();



		$this->start_controls_section(
			'icon_section',
			[
				'label' => esc_html__('Icon', 'myplugin'),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'icon',
			[
				'label' => esc_html__('Icon', 'myplugin'),
				'type' => \Elementor\Controls_Manager::ICONS,
				'default' => [
					'value' => 'fas fa-circle',
					'library' => 'fa-solid',
				],
				'recommended' => [
					'fa-solid' => [
						'circle',
						'dot-circle',
						'square-full',
					],
					'fa-regular' => [
						'circle',
						'dot-circle',
						'square-full',
					],
				],
			]
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'section_title_style',
			[
				'label' => esc_html__('content color', 'myplugin'),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'background',
				'types' => ['classic', 'gradient', 'video'],
				'selector' => '{{WRAPPER}} #background',
			]
		);
		$this->add_control(
			'heading color',
			[
				'type' => \Elementor\Controls_Manager::COLOR,
				'label' => esc_html__('Heading COLOR', 'myplugin'),
				'selectors' => [
					'{{WRAPPER}} #heading' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'description color',
			[
				'type' => \Elementor\Controls_Manager::COLOR,
				'label' => esc_html__('Description COLOR', 'myplugin'),
				'selectors' => [
					'{{WRAPPER}} #description' => 'color: {{VALUE}}',
				],
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'section_icon_style',
			[
				'label' => esc_html__('icon color', 'myplugin'),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);




		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'backgrou',
				'types' => ['classic', 'gradient', 'video'],
				'selector' => '{{WRAPPER}} #backgrou',
			]
		);

		$this->end_controls_section();
	}

	protected function render()
	{
		$settings = $this->get_settings_for_display();
?>
		<div class="single-service " id="background">
			<div class="service-icon " class="your-class " id="backgrou" style="background-color: #3080e3;">

				<?php \Elementor\Icons_Manager::render_icon($settings['icon'], ['aria-hidden' => 'true']); ?>
			</div>
			<h3 id="heading" style="your-class"><?php echo $settings['heading'] ?></h3>
			<p id="description" class="your-class"><?php echo $settings['description'] ?>.
			</p>
		</div>
<?php
	}
}
