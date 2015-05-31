<?php
/**
 * Umex Theme Customizer
 *
 * @package Umex
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function umex_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

    /*--- секция для добавления лого ---*/
    $wp_customize->add_section(
        'umex_general',
        array(
            'title' => __('Логотип', 'umex'),
            'priority' => 9,
        )
    );
    /*--- лого ---*/
    $wp_customize->add_setting(
        'site_logo',
        array(
            'default-image' => '',
            'sanitize_callback' => 'esc_url_raw',

        )
    );
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'site_logo',
            array(
               'label'          => __( 'Загрузите кортинку с логотипом', 'umex' ),
               'type'           => 'image',
               'section'        => 'umex_general',
               'settings'       => 'site_logo',
               'priority' => 9,
            )
        )
    );

		/*--- секция для добавления телефонов ---*/
		$wp_customize->add_section(
        'umex_contact_phones1',
        array(
            'title' => 'Контактные телефоны. 1-ый блок',
            'description' => '',
            'priority' => 35,
        )
    );

		/*--- телефоны ---*/
		/*--- начало говнокода. переписать в цикл ---*/
		$wp_customize->add_setting(
		    'umex_phone',
		    array('default' => '(4822)XX-XX-XX')
		);

		$wp_customize->add_control(
		    'umex_phone',
		    array(
		        'label' => '',
		        'section' => 'umex_contact_phones1',
		        'type' => 'text',
		    )
		);

		$wp_customize->add_setting(
		    'umex_phone1',
		    array('default' => '(4822)XX-XX-XX')
		);

		$wp_customize->add_control(
		    'umex_phone1',
		    array(
		        'label' => '',
		        'section' => 'umex_contact_phones1',
		        'type' => 'text',
		    )
		);
		$wp_customize->add_setting(
		    'umex_phone2',
		    array('default' => '(4822)XX-XX-XX')
		);

		$wp_customize->add_control(
		    'umex_phone2',
		    array(
		        'label' => '',
		        'section' => 'umex_contact_phones1',
		        'type' => 'text',
		    )
		);
		$wp_customize->add_setting(
		    'umex_phone3',
		    array('default' => '(4822)XX-XX-XX')
		);

		$wp_customize->add_control(
		    'umex_phone3',
		    array(
		        'label' => '',
		        'section' => 'umex_contact_phones1',
		        'type' => 'text',
		    )
		);
		$wp_customize->add_setting(
		    'umex_phone4',
		    array('default' => '(4822)XX-XX-XX')
		);

		$wp_customize->add_control(
		    'umex_phone4',
		    array(
		        'label' => '',
		        'section' => 'umex_contact_phones1',
		        'type' => 'text',
		    )
		);
		/*--- конец говнокода... наверное конец... ---*/

		/*--- секция для добавления телефонов ---*/
		$wp_customize->add_section(
        'umex_contact_phones2',
        array(
            'title' => 'Контактные телефоны. 2-ый блок',
            'description' => '',
            'priority' => 35,
        )
    );

		/*--- телефоны ---*/
		/*--- начало говнокода. переписать в цикл ---*/
		$wp_customize->add_setting(
		    'umex_phone5',
		    array('default' => '(4822)XX-XX-XX')
		);

		$wp_customize->add_control(
		    'umex_phone5',
		    array(
		        'label' => '',
		        'section' => 'umex_contact_phones2',
		        'type' => 'text',
		    )
		);

		$wp_customize->add_setting(
		    'umex_phone6',
		    array('default' => '(4822)XX-XX-XX')
		);

		$wp_customize->add_control(
		    'umex_phone6',
		    array(
		        'label' => '',
		        'section' => 'umex_contact_phones2',
		        'type' => 'text',
		    )
		);
		$wp_customize->add_setting(
		    'umex_phone7',
		    array('default' => '(4822)XX-XX-XX')
		);

		$wp_customize->add_control(
		    'umex_phone7',
		    array(
		        'label' => '',
		        'section' => 'umex_contact_phones2',
		        'type' => 'text',
		    )
		);
		$wp_customize->add_setting(
		    'umex_phone8',
		    array('default' => '(4822)XX-XX-XX')
		);

		$wp_customize->add_control(
		    'umex_phone8',
		    array(
		        'label' => '',
		        'section' => 'umex_contact_phones2',
		        'type' => 'text',
		    )
		);
		$wp_customize->add_setting(
		    'umex_phone9',
		    array('default' => '(4822)XX-XX-XX')
		);

		$wp_customize->add_control(
		    'umex_phone9',
		    array(
		        'label' => '',
		        'section' => 'umex_contact_phones2',
		        'type' => 'text',
		    )
		);
		/*--- конец говнокода... наверное конец... ---*/
		
		
		/*--- секция для добавления адреса в футер ---*/
		$wp_customize->add_section(
				'umex_contact_address',
				array(
						'title' => 'Адрес',
						'description' => '',
						'priority' => 38,
				)
		);

		$wp_customize->add_setting(
				'umex_address',
				array('default' => '172001, Тверь, ул.Хромова, д.2')
		);

		$wp_customize->add_control(
				'umex_address',
				array(
						'label' => '',
						'section' => 'umex_contact_address',
						'type' => 'text',
				)
		);
		
		/*--- секция для добавления расписания работы ---*/
		$wp_customize->add_section(
				'umex_timetable',
				array(
					'title' => 'Расписание работы',
					'description' => '',
					'priority' => 37,
				)
		);
		
		/*--- будние дни ---*/
		$wp_customize->add_setting(
				'umex_timetable_wr',
				array('default' => 'По будням - с 10:00 до 19:00')
		);

		$wp_customize->add_control(
				'umex_timetable_wr',
				array(
						'label' => '',
						'section' => 'umex_timetable',
						'type' => 'text',
				)
		);
			/*--- суббота ---*/
		$wp_customize->add_setting(
				'umex_timetable_sat',
				array('default' => 'В субботу - с 10:00 до 16:00')
		);

		$wp_customize->add_control(
				'umex_timetable_sat',
				array(
						'label' => '',
						'section' => 'umex_timetable',
						'type' => 'text',
				)
		);
			/*--- воскресенье ---*/
		$wp_customize->add_setting(
				'umex_timetable_sun',
				array('default' => 'Воскресенье - выходной')
		);

		$wp_customize->add_control(
				'umex_timetable_sun',
				array(
						'label' => '',
						'section' => 'umex_timetable',
						'type' => 'text',
				)
		);
}
add_action( 'customize_register', 'umex_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function umex_customize_preview_js() {
	wp_enqueue_script( 'umex_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), true );
}
add_action( 'customize_preview_init', 'umex_customize_preview_js' );
