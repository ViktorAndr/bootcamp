<?php
/*
 * Initialize the options before anything else.
 */

add_action('admin_init','maniva_meetup_theme_options',1);

/*
 * Build the custom settings & update OptionTree.
*/

function maniva_meetup_theme_options()
{

    /**
     * Get a copy of the saved settings array.
     */
    $saved_settings = get_option('option_tree_settings', array());

    // Pattern
    $patterns = array();
    if ($dir = opendir(get_template_directory() . '/images/patterns/')) {
        while (false !== ($file = readdir($dir))) {
            if ($file != '..' && $file != '.') {
                $patterns[] = array(
                    'value' => trim($file),
                    'label' => 'Click on pattern to preview',
                    'src'   => get_template_directory_uri() . '/images/patterns/' . $file, 40, 40, true
                );
            }
        }
        // Close directory handle
        closedir($dir);
    }
    $logo_default           =   get_template_directory_uri().'/images/logo-2.png';
    $logo_default_event     =   get_template_directory_uri().'/images/logo-header-3.png';
    $image_backtop_default  =   get_template_directory_uri().'/images/back_top_meetup.png';

    $maniva_meetup_font_option       =   array(
        array(
            'value'  =>  'ABeeZee',
            'label'  =>  esc_html__('ABeeZee','nightclub'),
        ),
        array(
            'value'  =>  'Abel',
            'label'  =>  esc_html__('Abel','nightclub'),
        ),
        array(
            'value'  =>  'Abril Fatface',
            'label'  =>  esc_html__('Abril Fatface','nightclub'),
        ),
        array(
            'value'  =>  'Aclonica',
            'label'  =>  esc_html__('Aclonica','nightclub'),
        ),
        array(
            'value'  =>  'Acme',
            'label'  =>  esc_html__('Acme','nightclub'),
        ),
        array(
            'value'  =>  'Actor',
            'label'  =>  esc_html__('Actor','nightclub'),
        ),
        array(
            'value'  =>  'Adamina',
            'label'  =>  esc_html__('Adamina','nightclub'),
        ),
        array(
            'value'  =>  'Advent Pro',
            'label'  =>  esc_html__('Advent Pro','nightclub'),
        ),
        array(
            'value'  =>  'Aguafina Script',
            'label'  =>  esc_html__('Aguafina Script','nightclub'),
        ),
        array(
            'value'  =>  'Akronim',
            'label'  =>  esc_html__('Akronim','nightclub'),
        ),
        array(
            'value'  =>  'Aladin',
            'label'  =>  esc_html__('Aladin','nightclub'),
        ),
        array(
            'value'  =>  'Aldrich',
            'label'  =>  esc_html__('Aldrich','nightclub'),
        ),
        array(
            'value'  =>  'Alef',
            'label'  =>  esc_html__('Alef','nightclub'),
        ),
        array(
            'value'  =>  'Alegreya',
            'label'  =>  esc_html__('Alegreya','nightclub'),
        ),
        array(
            'value'  =>  'Alegreya SC',
            'label'  =>  esc_html__('Alegreya SC','nightclub'),
        ),
        array(
            'value'  =>  'Alegreya Sans',
            'label'  =>  esc_html__('Alegreya Sans','nightclub'),
        ),
        array(
            'value'  =>  'Alegreya Sans SC',
            'label'  =>  esc_html__('Alegreya Sans SC','nightclub'),
        ),
        array(
            'value'  =>  'Alex Brush',
            'label'  =>  esc_html__('Alex Brush','nightclub'),
        ),
        array(
            'value'  =>  'Alfa Slab One',
            'label'  =>  esc_html__('Alfa Slab One','nightclub'),
        ),
        array(
            'value'  =>  'Alice',
            'label'  =>  esc_html__('Alice','nightclub'),
        ),
        array(
            'value'  =>  'Alike',
            'label'  =>  esc_html__('Alike','nightclub'),
        ),
        array(
            'value'  =>  'Alike Angular',
            'label'  =>  esc_html__('Alike Angular','nightclub'),
        ),
        array(
            'value'  =>  'Allan',
            'label'  =>  esc_html__('Allan','nightclub'),
        ),
        array(
            'value'  =>  'Allerta',
            'label'  =>  esc_html__('Allerta','nightclub'),
        ),
        array(
            'value'  =>  'Allerta Stencil',
            'label'  =>  esc_html__('Allerta Stencil','nightclub'),
        ),
        array(
            'value'  =>  'Allura',
            'label'  =>  esc_html__('Allura','nightclub'),
        ),
        array(
            'value'  =>  'Almendra',
            'label'  =>  esc_html__('Almendra','nightclub'),
        ),
        array(
            'value'  =>  'Almendra Display',
            'label'  =>  esc_html__('Almendra Display','nightclub'),
        ),
        array(
            'value'  =>  'Almendra SC',
            'label'  =>  esc_html__('Almendra SC','nightclub'),
        ),
        array(
            'value'  =>  'Amarante',
            'label'  =>  esc_html__('Amarante','nightclub'),
        ),
        array(
            'value'  =>  'Amaranth',
            'label'  =>  esc_html__('Amaranth','nightclub'),
        ),
        array(
            'value'  =>  'Amatic SC',
            'label'  =>  esc_html__('Amatic SC','nightclub'),
        ),
        array(
            'value'  =>  'Amethysta',
            'label'  =>  esc_html__('Amethysta','nightclub'),
        ),
        array(
            'value'  =>  'Anaheim',
            'label'  =>  esc_html__('Anaheim','nightclub'),
        ),
        array(
            'value'  =>  'Andada',
            'label'  =>  esc_html__('Andada','nightclub'),
        ),
        array(
            'value'  =>  'Andika',
            'label'  =>  esc_html__('Andika','nightclub'),
        ),
        array(
            'value'  =>  'Angkor',
            'label'  =>  esc_html__('Angkor','nightclub'),
        ),
        array(
            'value'  =>  'Annie Use Your Telescope',
            'label'  =>  esc_html__('Annie Use Your Telescope','nightclub'),
        ),
        array(
            'value'  =>  'Anonymous Pro',
            'label'  =>  esc_html__('Anonymous Pro','nightclub'),
        ),
        array(
            'value'  =>  'Antic',
            'label'  =>  esc_html__('Antic','nightclub'),
        ),
        array(
            'value'  =>  'Antic Didone',
            'label'  =>  esc_html__('Antic Didone','nightclub'),
        ),
        array(
            'value'  =>  'Antic Slab',
            'label'  =>  esc_html__('Antic Slab','nightclub'),
        ),
        array(
            'value'  =>  'Anton',
            'label'  =>  esc_html__('Anton','nightclub'),
        ),
        array(
            'value'  =>  'Arapey',
            'label'  =>  esc_html__('Arapey','nightclub'),
        ),
        array(
            'value'  =>  'Arbutus',
            'label'  =>  esc_html__('Arbutus','nightclub'),
        ),
        array(
            'value'  =>  'Arbutus Slab',
            'label'  =>  esc_html__('Arbutus Slab','nightclub'),
        ),
        array(
            'value'  =>  'Architects Daughter',
            'label'  =>  esc_html__('Architects Daughter','nightclub'),
        ),
        array(
            'value'  =>  'Archivo Black',
            'label'  =>  esc_html__('Archivo Black','nightclub'),
        ),
        array(
            'value'  =>  'Archivo Narrow',
            'label'  =>  esc_html__('Archivo Narrow','nightclub'),
        ),
        array(
            'value'  =>  'Arimo',
            'label'  =>  esc_html__('Arimo','nightclub'),
        ),
        array(
            'value'  =>  'Arizonia',
            'label'  =>  esc_html__('Arizonia','nightclub'),
        ),
        array(
            'value'  =>  'Armata',
            'label'  =>  esc_html__('Armata','nightclub'),
        ),
        array(
            'value'  =>  'Artifika',
            'label'  =>  esc_html__('Artifika','nightclub'),
        ),
        array(
            'value'  =>  'Arvo',
            'label'  =>  esc_html__('Arvo','nightclub'),
        ),
        array(
            'value'  =>  'Asap',
            'label'  =>  esc_html__('Asap','nightclub'),
        ),
        array(
            'value'  =>  'Asset',
            'label'  =>  esc_html__('Asset','nightclub'),
        ),
        array(
            'value'  =>  'Astloch',
            'label'  =>  esc_html__('Astloch','nightclub'),
        ),
        array(
            'value'  =>  'Asul',
            'label'  =>  esc_html__('Asul','nightclub'),
        ),
        array(
            'value'  =>  'Atomic Age',
            'label'  =>  esc_html__('Atomic Age','nightclub'),
        ),
        array(
            'value'  =>  'Aubrey',
            'label'  =>  esc_html__('Aubrey','nightclub'),
        ),
        array(
            'value'  =>  'Audiowide',
            'label'  =>  esc_html__('Audiowide','nightclub'),
        ),
        array(
            'value'  =>  'Autour One',
            'label'  =>  esc_html__('Autour One','nightclub'),
        ),
        array(
            'value'  =>  'Average',
            'label'  =>  esc_html__('Average','nightclub'),
        ),
        array(
            'value'  =>  'Average Sans',
            'label'  =>  esc_html__('Average Sans','nightclub'),
        ),
        array(
            'value'  =>  'Averia Gruesa Libre',
            'label'  =>  esc_html__('Averia Gruesa Libre','nightclub'),
        ),
        array(
            'value'  =>  'Averia Libre',
            'label'  =>  esc_html__('Averia Libre','nightclub'),
        ),
        array(
            'value'  =>  'Averia Sans Libre',
            'label'  =>  esc_html__('Averia Sans Libre','nightclub'),
        ),
        array(
            'value'  =>  'Averia Serif Libre',
            'label'  =>  esc_html__('Averia Serif Libre','nightclub'),
        ),
        array(
            'value'  =>  'Bad Script',
            'label'  =>  esc_html__('Bad Script','nightclub'),
        ),
        array(
            'value'  =>  'Balthazar',
            'label'  =>  esc_html__('Balthazar','nightclub'),
        ),
        array(
            'value'  =>  'Bangers',
            'label'  =>  esc_html__('Bangers','nightclub'),
        ),
        array(
            'value'  =>  'Basic',
            'label'  =>  esc_html__('Basic','nightclub'),
        ),
        array(
            'value'  =>  'Battambang',
            'label'  =>  esc_html__('Battambang','nightclub'),
        ),
        array(
            'value'  =>  'Baumans',
            'label'  =>  esc_html__('Baumans','nightclub'),
        ),
        array(
            'value'  =>  'Bayont',
            'label'  =>  esc_html__('Bayon','nightclub'),
        ),
        array(
            'value'  =>  'Belgrano',
            'label'  =>  esc_html__('Belgrano','nightclub'),
        ),
        array(
            'value'  =>  'Belleza',
            'label'  =>  esc_html__('Belleza','nightclub'),
        ),
        array(
            'value'  =>  'BenchNine',
            'label'  =>  esc_html__('BenchNine','nightclub'),
        ),
        array(
            'value'  =>  'Bentham',
            'label'  =>  esc_html__('Bentham','nightclub'),
        ),
        array(
            'value'  =>  'Berkshire Swash',
            'label'  =>  esc_html__('Berkshire Swash','nightclub'),
        ),
        array(
            'value'  =>  'Bevan',
            'label'  =>  esc_html__('Bevan','nightclub'),
        ),
        array(
            'value'  =>  'Bigelow Rules',
            'label'  =>  esc_html__('Bigelow Rules','nightclub'),
        ),
        array(
            'value'  =>  'Bigshot One',
            'label'  =>  esc_html__('Bigshot One','nightclub'),
        ),
        array(
            'value'  =>  'Bilbo',
            'label'  =>  esc_html__('Bilbo','nightclub'),
        ),
        array(
            'value'  =>  'Bilbo Swash Caps',
            'label'  =>  esc_html__('Bilbo Swash Caps','nightclub'),
        ),
        array(
            'value'  =>  'Bitter',
            'label'  =>  esc_html__('Bitter','nightclub'),
        ),
        array(
            'value'  =>  'Black Ops One',
            'label'  =>  esc_html__('Black Ops One','nightclub'),
        ),
        array(
            'value'  =>  'Bokor',
            'label'  =>  esc_html__('Bokor','nightclub'),
        ),
        array(
            'value'  =>  'Bonbon',
            'label'  =>  esc_html__('Bonbon','nightclub'),
        ),
        array(
            'value'  =>  'Boogaloo',
            'label'  =>  esc_html__('Boogaloo','nightclub'),
        ),
        array(
            'value'  =>  'Bowlby One',
            'label'  =>  esc_html__('Bowlby One','nightclub'),
        ),
        array(
            'value'  =>  'Bowlby One SC',
            'label'  =>  esc_html__('Bowlby One SC','nightclub'),
        ),
        array(
            'value'  =>  'Brawler',
            'label'  =>  esc_html__('Brawler','nightclub'),
        ),
        array(
            'value'  =>  'Bree Serif',
            'label'  =>  esc_html__('Bree Serif','nightclub'),
        ),
        array(
            'value'  =>  'Bubblegum Sans',
            'label'  =>  esc_html__('Bubblegum Sans','nightclub'),
        ),
        array(
            'value'  =>  'Bubbler One',
            'label'  =>  esc_html__('Bubbler One','nightclub'),
        ),
        array(
            'value'  =>  'Buda',
            'label'  =>  esc_html__('Buda','nightclub'),
        ),
        array(
            'value'  =>  'Buenard',
            'label'  =>  esc_html__('Buenard','nightclub'),
        ),
        array(
            'value'  =>  'Butcherman',
            'label'  =>  esc_html__('Butcherman','nightclub'),
        ),
        array(
            'value'  =>  'Butterfly Kids',
            'label'  =>  esc_html__('Butterfly Kids','nightclub'),
        ),
        array(
            'value'  =>  'Cabin',
            'label'  =>  esc_html__('Cabin','nightclub'),
        ),
        array(
            'value'  =>  'Cabin Condensed',
            'label'  =>  esc_html__('Cabin Condensed','nightclub'),
        ),
        array(
            'value'  =>  'Cabin Sketch',
            'label'  =>  esc_html__('Cabin Sketch','nightclub'),
        ),
        array(
            'value'  =>  'Caesar Dressing',
            'label'  =>  esc_html__('Caesar Dressing','nightclub'),
        ),
        array(
            'value'  =>  'Cagliostro',
            'label'  =>  esc_html__('Cagliostro','nightclub'),
        ),
        array(
            'value'  =>  'Calligraffitti',
            'label'  =>  esc_html__('Calligraffitti','nightclub'),
        ),
        array(
            'value'  =>  'Cambo',
            'label'  =>  esc_html__('Cambo','nightclub'),
        ),
        array(
            'value'  =>  'Candal',
            'label'  =>  esc_html__('Candal','nightclub'),
        ),
        array(
            'value'  =>  'Cantarell',
            'label'  =>  esc_html__('Cantarell','nightclub'),
        ),
        array(
            'value'  =>  'Cantata One',
            'label'  =>  esc_html__('Cantata One','nightclub'),
        ),
        array(
            'value'  =>  'Cantora One',
            'label'  =>  esc_html__('Cantora One','nightclub'),
        ),
        array(
            'value'  =>  'Capriola',
            'label'  =>  esc_html__('Capriola','nightclub'),
        ),
        array(
            'value'  =>  'Cardo',
            'label'  =>  esc_html__('Cardo','nightclub'),
        ),
        array(
            'value'  =>  'Carme',
            'label'  =>  esc_html__('Carme','nightclub'),
        ),
        array(
            'value'  =>  'Carrois Gothic',
            'label'  =>  esc_html__('Carrois Gothic','nightclub'),
        ),
        array(
            'value'  =>  'Carrois Gothic SC',
            'label'  =>  esc_html__('Carrois Gothic SC','nightclub'),
        ),
        array(
            'value'  =>  'Carter One',
            'label'  =>  esc_html__('Carter One','nightclub'),
        ),
        array(
            'value'  =>  'Caudex',
            'label'  =>  esc_html__('Caudex','nightclub'),
        ),
        array(
            'value'  =>  'Cedarville Cursive',
            'label'  =>  esc_html__('Cedarville Cursive','nightclub'),
        ),
        array(
            'value'  =>  'Ceviche One',
            'label'  =>  esc_html__('Ceviche One','nightclub'),
        ),
        array(
            'value'  =>  'Changa One',
            'label'  =>  esc_html__('Changa One','nightclub'),
        ),
        array(
            'value'  =>  'Chango',
            'label'  =>  esc_html__('Chango','nightclub'),
        ),
        array(
            'value'  =>  'Chau Philomene One',
            'label'  =>  esc_html__('Chau Philomene One','nightclub'),
        ),
        array(
            'value'  =>  'Chela One',
            'label'  =>  esc_html__('Chela One','nightclub'),
        ),
        array(
            'value'  =>  'Chelsea Market',
            'label'  =>  esc_html__('Chelsea Market','nightclub'),
        ),
        array(
            'value'  =>  'Chenla',
            'label'  =>  esc_html__('Chenla','nightclub'),
        ),
        array(
            'value'  =>  'Cherry Cream Soda',
            'label'  =>  esc_html__('Cherry Cream Soda','nightclub'),
        ),
        array(
            'value'  =>  'Cherry Swash',
            'label'  =>  esc_html__('Cherry Swash','nightclub'),
        ),
        array(
            'value'  =>  'Chewy',
            'label'  =>  esc_html__('Chewy','nightclub'),
        ),
        array(
            'value'  =>  'Chicle',
            'label'  =>  esc_html__('Chicle','nightclub'),
        ),
        array(
            'value'  =>  'Chivo',
            'label'  =>  esc_html__('Chivo','nightclub'),
        ),
        array(
            'value'  =>  'Cinzel',
            'label'  =>  esc_html__('Cinzel','nightclub'),
        ),
        array(
            'value'  =>  'Cinzel Decorative',
            'label'  =>  esc_html__('Cinzel Decorative','nightclub'),
        ),
        array(
            'value'  =>  'Clicker Script',
            'label'  =>  esc_html__('Clicker Script','nightclub'),
        ),
        array(
            'value'  =>  'Coda',
            'label'  =>  esc_html__('Coda','nightclub'),
        ),
        array(
            'value'  =>  'Coda Caption',
            'label'  =>  esc_html__('Coda Caption','nightclub'),
        ),
        array(
            'value'  =>  'Codystar',
            'label'  =>  esc_html__('Codystar','nightclub'),
        ),
        array(
            'value'  =>  'Combo',
            'label'  =>  esc_html__('Combo','nightclub'),
        ),
        array(
            'value'  =>  'Comfortaa',
            'label'  =>  esc_html__('Comfortaa','nightclub'),
        ),
        array(
            'value'  =>  'Coming Soon',
            'label'  =>  esc_html__('Coming Soon','nightclub'),
        ),
        array(
            'value'  =>  'Concert One',
            'label'  =>  esc_html__('Concert One','nightclub'),
        ),
        array(
            'value'  =>  'Condiment',
            'label'  =>  esc_html__('Condiment','nightclub'),
        ),
        array(
            'value'  =>  'Content',
            'label'  =>  esc_html__('Content','nightclub'),
        ),
        array(
            'value'  =>  'Contrail One',
            'label'  =>  esc_html__('Contrail One','nightclub'),
        ),
        array(
            'value'  =>  'Convergence',
            'label'  =>  esc_html__('Convergence','nightclub'),
        ),
        array(
            'value'  =>  'Cookie',
            'label'  =>  esc_html__('Cookie','nightclub'),
        ),
        array(
            'value'  =>  'Copse',
            'label'  =>  esc_html__('Copse','nightclub'),
        ),
        array(
            'value'  =>  'Corben',
            'label'  =>  esc_html__('Corben','nightclub'),
        ),
        array(
            'value'  =>  'Courgette',
            'label'  =>  esc_html__('Courgette','nightclub'),
        ),
        array(
            'value'  =>  'Cousine',
            'label'  =>  esc_html__('Cousine','nightclub'),
        ),
        array(
            'value'  =>  'Coustard',
            'label'  =>  esc_html__('Coustard','nightclub'),
        ),
        array(
            'value'  =>  'Covered By Your Grace',
            'label'  =>  esc_html__('Covered By Your Grace','nightclub'),
        ),
        array(
            'value'  =>  'Crafty Girls',
            'label'  =>  esc_html__('Crafty Girls','nightclub'),
        ),
        array(
            'value'  =>  'Creepster',
            'label'  =>  esc_html__('Creepster','nightclub'),
        ),
        array(
            'value'  =>  'Crete Round',
            'label'  =>  esc_html__('Crete Round','nightclub'),
        ),
        array(
            'value'  =>  'Crimson Text',
            'label'  =>  esc_html__('Crimson Text','nightclub'),
        ),
        array(
            'value'  =>  'Croissant One',
            'label'  =>  esc_html__('Croissant One','nightclub'),
        ),
        array(
            'value'  =>  'Crushed',
            'label'  =>  esc_html__('Crushed','nightclub'),
        ),
        array(
            'value'  =>  'Cuprum',
            'label'  =>  esc_html__('Cuprum','nightclub'),
        ),
        array(
            'value'  =>  'Cutive',
            'label'  =>  esc_html__('Cutive','nightclub'),
        ),
        array(
            'value'  =>  'Cutive Mono',
            'label'  =>  esc_html__('Cutive Mono','nightclub'),
        ),
        array(
            'value'  =>  'Damion',
            'label'  =>  esc_html__('Damion','nightclub'),
        ),
        array(
            'value'  =>  'Dancing Script',
            'label'  =>  esc_html__('Dancing Script','nightclub'),
        ),
        array(
            'value'  =>  'Dangrek',
            'label'  =>  esc_html__('Dangrek','nightclub'),
        ),
        array(
            'value'  =>  'Dawning of a New Day',
            'label'  =>  esc_html__('Dawning of a New Day','nightclub'),
        ),
        array(
            'value'  =>  'Days One',
            'label'  =>  esc_html__('Days One','nightclub'),
        ),
        array(
            'value'  =>  'Delius',
            'label'  =>  esc_html__('Delius','nightclub'),
        ),
        array(
            'value'  =>  'Delius Swash Caps',
            'label'  =>  esc_html__('Delius Swash Caps','nightclub'),
        ),
        array(
            'value'  =>  'Delius Unicase',
            'label'  =>  esc_html__('Delius Unicase','nightclub'),
        ),
        array(
            'value'  =>  'Denk One',
            'label'  =>  esc_html__('Denk One','nightclub'),
        ),
        array(
            'value'  =>  'Devonshire',
            'label'  =>  esc_html__('Devonshire','nightclub'),
        ),
        array(
            'value'  =>  'Didact Gothic',
            'label'  =>  esc_html__('Didact Gothic','nightclub'),
        ),
        array(
            'value'  =>  'Diplomata',
            'label'  =>  esc_html__('Diplomata','nightclub'),
        ),
        array(
            'value'  =>  'Diplomata SC',
            'label'  =>  esc_html__('Diplomata SC','nightclub'),
        ),
        array(
            'value'  =>  'Domine',
            'label'  =>  esc_html__('Domine','nightclub'),
        ),
        array(
            'value'  =>  'Donegal One',
            'label'  =>  esc_html__('Donegal One','nightclub'),
        ),
        array(
            'value'  =>  'Doppio One',
            'label'  =>  esc_html__('Doppio One','nightclub'),
        ),
        array(
            'value'  =>  'Dorsa',
            'label'  =>  esc_html__('Dorsa','nightclub'),
        ),
        array(
            'value'  =>  'Dosis',
            'label'  =>  esc_html__('Dosis','nightclub'),
        ),
        array(
            'value'  =>  'Dr Sugiyama',
            'label'  =>  esc_html__('Dr Sugiyama','nightclub'),
        ),
        array(
            'value'  =>  'Droid Sans',
            'label'  =>  esc_html__('Droid Sans','nightclub'),
        ),
        array(
            'value'  =>  'Droid Sans Mono',
            'label'  =>  esc_html__('Droid Sans Mono','nightclub'),
        ),
        array(
            'value'  =>  'Droid Serif',
            'label'  =>  esc_html__('Droid Serif','nightclub'),
        ),
        array(
            'value'  =>  'Duru Sans',
            'label'  =>  esc_html__('Duru Sans','nightclub'),
        ),
        array(
            'value'  =>  'Dynalight',
            'label'  =>  esc_html__('Dynalight','nightclub'),
        ),
        array(
            'value'  =>  'EB Garamond',
            'label'  =>  esc_html__('EB Garamond','nightclub'),
        ),
        array(
            'value'  =>  'Eagle Lake',
            'label'  =>  esc_html__('Eagle Lake','nightclub'),
        ),
        array(
            'value'  =>  'Eater',
            'label'  =>  esc_html__('Eater','nightclub'),
        ),
        array(
            'value'  =>  'Economica',
            'label'  =>  esc_html__('Economica','nightclub'),
        ),
        array(
            'value'  =>  'Ek Mukta',
            'label'  =>  esc_html__('Ek Mukta','nightclub'),
        ),
        array(
            'value'  =>  'Electrolize',
            'label'  =>  esc_html__('Electrolize','nightclub'),
        ),
        array(
            'value'  =>  'Elsie',
            'label'  =>  esc_html__('Elsie','nightclub'),
        ),
        array(
            'value'  =>  'Elsie Swash Caps',
            'label'  =>  esc_html__('Elsie Swash Caps','nightclub'),
        ),
        array(
            'value'  =>  'Emblema One',
            'label'  =>  esc_html__('Emblema One','nightclub'),
        ),
        array(
            'value'  =>  'Emilys Candy',
            'label'  =>  esc_html__('Emilys Candy','nightclub'),
        ),
        array(
            'value'  =>  'Engagement',
            'label'  =>  esc_html__('Engagement','nightclub'),
        ),
        array(
            'value'  =>  'Englebert',
            'label'  =>  esc_html__('Englebert','nightclub'),
        ),
        array(
            'value'  =>  'Enriqueta',
            'label'  =>  esc_html__('Enriqueta','nightclub'),
        ),
        array(
            'value'  =>  'Erica One',
            'label'  =>  esc_html__('Erica One','nightclub'),
        ),
        array(
            'value'  =>  'Esteban',
            'label'  =>  esc_html__('Esteban','nightclub'),
        ),
        array(
            'value'  =>  'Euphoria Script',
            'label'  =>  esc_html__('Euphoria Script','nightclub'),
        ),
        array(
            'value'  =>  'Ewert',
            'label'  =>  esc_html__('Ewert','nightclub'),
        ),
        array(
            'value'  =>  'Exo',
            'label'  =>  esc_html__('Exo','nightclub'),
        ),
        array(
            'value'  =>  'Exo 2',
            'label'  =>  esc_html__('Exo 2','nightclub'),
        ),
        array(
            'value'  =>  'Expletus Sans',
            'label'  =>  esc_html__('Expletus Sans','nightclub'),
        ),
        array(
            'value'  =>  'Fanwood Text',
            'label'  =>  esc_html__('Fanwood Text','nightclub'),
        ),
        array(
            'value'  =>  'Fascinate',
            'label'  =>  esc_html__('Fascinate','nightclub'),
        ),
        array(
            'value'  =>  'Fascinate Inline',
            'label'  =>  esc_html__('Fascinate Inline','nightclub'),
        ),
        array(
            'value'  =>  'Faster One',
            'label'  =>  esc_html__('Faster One','nightclub'),
        ),
        array(
            'value'  =>  'Fasthand',
            'label'  =>  esc_html__('Fasthand','nightclub'),
        ),
        array(
            'value'  =>  'Fauna One',
            'label'  =>  esc_html__('Fauna One','nightclub'),
        ),
        array(
            'value'  =>  'Federant',
            'label'  =>  esc_html__('Federant','nightclub'),
        ),
        array(
            'value'  =>  'Federo',
            'label'  =>  esc_html__('Federo','nightclub'),
        ),
        array(
            'value'  =>  'Felipa',
            'label'  =>  esc_html__('Felipa','nightclub'),
        ),
        array(
            'value'  =>  'Fenix',
            'label'  =>  esc_html__('Fenix','nightclub'),
        ),
        array(
            'value'  =>  'Finger Paint',
            'label'  =>  esc_html__('Finger Paint','nightclub'),
        ),
        array(
            'value'  =>  'Fira Mono',
            'label'  =>  esc_html__('Fira Mono','nightclub'),
        ),
        array(
            'value'  =>  'Fira Sans',
            'label'  =>  esc_html__('Fira Sans','nightclub'),
        ),
        array(
            'value'  =>  'Fjalla One',
            'label'  =>  esc_html__('Fjalla One','nightclub'),
        ),
        array(
            'value'  =>  'Fjord One',
            'label'  =>  esc_html__('Fjord One','nightclub'),
        ),
        array(
            'value'  =>  'Flamenco',
            'label'  =>  esc_html__('Flamenco','nightclub'),
        ),
        array(
            'value'  =>  'Flavors',
            'label'  =>  esc_html__('Flavors','nightclub'),
        ),
        array(
            'value'  =>  'Fondamento',
            'label'  =>  esc_html__('Fondamento','nightclub'),
        ),
        array(
            'value'  =>  'Fontdiner Swanky',
            'label'  =>  esc_html__('Fontdiner Swanky','nightclub'),
        ),
        array(
            'value'  =>  'Forum',
            'label'  =>  esc_html__('Forum','nightclub'),
        ),
        array(
            'value'  =>  'Francois One',
            'label'  =>  esc_html__('Francois One','nightclub'),
        ),
        array(
            'value'  =>  'Freckle Face',
            'label'  =>  esc_html__('Freckle Face','nightclub'),
        ),
        array(
            'value'  =>  'Fredericka the Great',
            'label'  =>  esc_html__('Fredericka the Great','nightclub'),
        ),
        array(
            'value'  =>  'Fredoka One',
            'label'  =>  esc_html__('Fredoka One','nightclub'),
        ),
        array(
            'value'  =>  'Freehand',
            'label'  =>  esc_html__('Freehand','nightclub'),
        ),
        array(
            'value'  =>  'Fresca',
            'label'  =>  esc_html__('Fresca','nightclub'),
        ),
        array(
            'value'  =>  'Frijole',
            'label'  =>  esc_html__('Frijole','nightclub'),
        ),
        array(
            'value'  =>  'Fruktur',
            'label'  =>  esc_html__('Fruktur','nightclub'),
        ),
        array(
            'value'  =>  'Fugaz One',
            'label'  =>  esc_html__('Fugaz One','nightclub'),
        ),
        array(
            'value'  =>  'GFS Didot',
            'label'  =>  esc_html__('GFS Didot','nightclub'),
        ),
        array(
            'value'  =>  'GFS Neohellenic',
            'label'  =>  esc_html__('GFS Neohellenic','nightclub'),
        ),
        array(
            'value'  =>  'Gabriela',
            'label'  =>  esc_html__('Gabriela','nightclub'),
        ),
        array(
            'value'  =>  'Gafata',
            'label'  =>  esc_html__('Gafata','nightclub'),
        ),
        array(
            'value'  =>  'Galdeano',
            'label'  =>  esc_html__('Galdeano','nightclub'),
        ),
        array(
            'value'  =>  'Galindo',
            'label'  =>  esc_html__('Galindo','nightclub'),
        ),
        array(
            'value'  =>  'Gentium Basic',
            'label'  =>  esc_html__('Gentium Basic','nightclub'),
        ),
        array(
            'value'  =>  'Gentium Book Basic',
            'label'  =>  esc_html__('Gentium Book Basic','nightclub'),
        ),
        array(
            'value'  =>  'Geo',
            'label'  =>  esc_html__('Geo','nightclub'),
        ),
        array(
            'value'  =>  'Geostar',
            'label'  =>  esc_html__('Geostar','nightclub'),
        ),
        array(
            'value'  =>  'Geostar Fill',
            'label'  =>  esc_html__('Geostar Fill','nightclub'),
        ),
        array(
            'value'  =>  'Germania One',
            'label'  =>  esc_html__('Germania One','nightclub'),
        ),
        array(
            'value'  =>  'Gilda Display',
            'label'  =>  esc_html__('Gilda Display','nightclub'),
        ),
        array(
            'value'  =>  'Give You Glory',
            'label'  =>  esc_html__('Give You Glory','nightclub'),
        ),
        array(
            'value'  =>  'Glass Antiqua',
            'label'  =>  esc_html__('Glass Antiqua','nightclub'),
        ),
        array(
            'value'  =>  'Glegoo',
            'label'  =>  esc_html__('Glegoo','nightclub'),
        ),
        array(
            'value'  =>  'Gloria Hallelujah',
            'label'  =>  esc_html__('Gloria Hallelujah','nightclub'),
        ),
        array(
            'value'  =>  'Goblin One',
            'label'  =>  esc_html__('Goblin One','nightclub'),
        ),
        array(
            'value'  =>  'Gochi Hand',
            'label'  =>  esc_html__('Gochi Hand','nightclub'),
        ),
        array(
            'value'  =>  'Gorditas',
            'label'  =>  esc_html__('Gorditas','nightclub'),
        ),
        array(
            'value'  =>  'Goudy Bookletter 1911',
            'label'  =>  esc_html__('Goudy Bookletter 1911','nightclub'),
        ),
        array(
            'value'  =>  'Graduate',
            'label'  =>  esc_html__('Graduate','nightclub'),
        ),
        array(
            'value'  =>  'Grand Hotel',
            'label'  =>  esc_html__('Grand Hotel','nightclub'),
        ),
        array(
            'value'  =>  'Gravitas One',
            'label'  =>  esc_html__('Goblin One','nightclub'),
        ),
        array(
            'value'  =>  'Great Vibes',
            'label'  =>  esc_html__('Great Vibes','nightclub'),
        ),
        array(
            'value'  =>  'Griffy',
            'label'  =>  esc_html__('Griffy','nightclub'),
        ),
        array(
            'value'  =>  'Gruppo',
            'label'  =>  esc_html__('Gruppo','nightclub'),
        ),
        array(
            'value'  =>  'Gudea',
            'label'  =>  esc_html__('Gudea','nightclub'),
        ),
        array(
            'value'  =>  'Habibi',
            'label'  =>  esc_html__('Habibi','nightclub'),
        ),
        array(
            'value'  =>  'Halant',
            'label'  =>  esc_html__('Halant','nightclub'),
        ),
        array(
            'value'  =>  'Hammersmith One',
            'label'  =>  esc_html__('Hammersmith One','nightclub'),
        ),
        array(
            'value'  =>  'Hanalei',
            'label'  =>  esc_html__('Hanalei','nightclub'),
        ),
        array(
            'value'  =>  'Hanalei Fill',
            'label'  =>  esc_html__('Hanalei Fill','nightclub'),
        ),
        array(
            'value'  =>  'Handlee',
            'label'  =>  esc_html__('Handlee','nightclub'),
        ),
        array(
            'value'  =>  'Hanuman',
            'label'  =>  esc_html__('Hanuman','nightclub'),
        ),
        array(
            'value'  =>  'Happy Monkey',
            'label'  =>  esc_html__('Happy Monkey','nightclub'),
        ),
        array(
            'value'  =>  'Headland One',
            'label'  =>  esc_html__('Headland One','nightclub'),
        ),
        array(
            'value'  =>  'Henny Penny',
            'label'  =>  esc_html__('Henny Penny','nightclub'),
        ),
        array(
            'value'  =>  'Herr Von Muellerhoff',
            'label'  =>  esc_html__('Herr Von Muellerhoff','nightclub'),
        ),
        array(
            'value'  =>  'Hind',
            'label'  =>  esc_html__('Hind','nightclub'),
        ),
        array(
            'value'  =>  'Holtwood One SC',
            'label'  =>  esc_html__('Holtwood One SC','nightclub'),
        ),
        array(
            'value'  =>  'Homemade Apple',
            'label'  =>  esc_html__('Homemade Apple','nightclub'),
        ),
        array(
            'value'  =>  'Homenaje',
            'label'  =>  esc_html__('Homenaje','nightclub'),
        ),
        array(
            'value'  =>  'IM Fell DW Pica',
            'label'  =>  esc_html__('IM Fell DW Pica','nightclub'),
        ),
        array(
            'value'  =>  'IM Fell DW Pica SC',
            'label'  =>  esc_html__('IM Fell DW Pica SC','nightclub'),
        ),
        array(
            'value'  =>  'IM Fell Double Pica',
            'label'  =>  esc_html__('IM Fell Double Pica','nightclub'),
        ),
        array(
            'value'  =>  'IM Fell Double Pica SC',
            'label'  =>  esc_html__('IM Fell Double Pica SC','nightclub'),
        ),
        array(
            'value'  =>  'IM Fell English',
            'label'  =>  esc_html__('IM Fell English','nightclub'),
        ),
        array(
            'value'  =>  'IM Fell English SC',
            'label'  =>  esc_html__('IM Fell English SC','nightclub'),
        ),
        array(
            'value'  =>  'IM Fell French Canon',
            'label'  =>  esc_html__('IM Fell French Canon','nightclub'),
        ),
        array(
            'value'  =>  'IM Fell French Canon SC',
            'label'  =>  esc_html__('IM Fell French Canon SC','nightclub'),
        ),
        array(
            'value'  =>  'IM Fell Great Primer',
            'label'  =>  esc_html__('IM Fell Great Primer','nightclub'),
        ),
        array(
            'value'  =>  'IM Fell Great Primer SC',
            'label'  =>  esc_html__('IM Fell Great Primer SC','nightclub'),
        ),
        array(
            'value'  =>  'Iceberg',
            'label'  =>  esc_html__('Iceberg','nightclub'),
        ),
        array(
            'value'  =>  'Iceland',
            'label'  =>  esc_html__('Iceland','nightclub'),
        ),
        array(
            'value'  =>  'Imprima',
            'label'  =>  esc_html__('Imprima','nightclub'),
        ),
        array(
            'value'  =>  'Inconsolata',
            'label'  =>  esc_html__('Inconsolata','nightclub'),
        ),
        array(
            'value'  =>  'Inder',
            'label'  =>  esc_html__('Inder','nightclub'),
        ),
        array(
            'value'  =>  'Indie Flower',
            'label'  =>  esc_html__('Indie Flower','nightclub'),
        ),
        array(
            'value'  =>  'Inika',
            'label'  =>  esc_html__('Inika','nightclub'),
        ),
        array(
            'value'  =>  'Irish Grover',
            'label'  =>  esc_html__('Irish Grover','nightclub'),
        ),
        array(
            'value'  =>  'Istok Web',
            'label'  =>  esc_html__('Istok Web','nightclub'),
        ),
        array(
            'value'  =>  'Italiana',
            'label'  =>  esc_html__('Italiana','nightclub'),
        ),
        array(
            'value'  =>  'Italianno',
            'label'  =>  esc_html__('Italianno','nightclub'),
        ),
        array(
            'value'  =>  'Jacques Francois',
            'label'  =>  esc_html__('Jacques Francois','nightclub'),
        ),
        array(
            'value'  =>  'Jacques Francois Shadow',
            'label'  =>  esc_html__('Jacques Francois Shadow','nightclub'),
        ),
        array(
            'value'  =>  'Jim Nightshade',
            'label'  =>  esc_html__('Jim Nightshade','nightclub'),
        ),
        array(
            'value'  =>  'Jockey One',
            'label'  =>  esc_html__('Jockey One','nightclub'),
        ),
        array(
            'value'  =>  'Jolly Lodger',
            'label'  =>  esc_html__('Jolly Lodger','nightclub'),
        ),
        array(
            'value'  =>  'Josefin Sans',
            'label'  =>  esc_html__('Josefin Sans','nightclub'),
        ),
        array(
            'value'  =>  'Josefin Slab',
            'label'  =>  esc_html__('Josefin Slab','nightclub'),
        ),
        array(
            'value'  =>  'Joti One',
            'label'  =>  esc_html__('Joti One','nightclub'),
        ),
        array(
            'value'  =>  'Judson',
            'label'  =>  esc_html__('Judson','nightclub'),
        ),
        array(
            'value'  =>  'Julee',
            'label'  =>  esc_html__('Julee','nightclub'),
        ),
        array(
            'value'  =>  'Julius Sans One',
            'label'  =>  esc_html__('Julius Sans One','nightclub'),
        ),
        array(
            'value'  =>  'Junge',
            'label'  =>  esc_html__('Junge','nightclub'),
        ),
        array(
            'value'  =>  'Jura',
            'label'  =>  esc_html__('Jura','nightclub'),
        ),
        array(
            'value'  =>  'Just Another Hand',
            'label'  =>  esc_html__('Just Another Hand','nightclub'),
        ),
        array(
            'value'  =>  'Just Me Again Down Here',
            'label'  =>  esc_html__('Just Me Again Down Here','nightclub'),
        ),
        array(
            'value'  =>  'Kalam',
            'label'  =>  esc_html__('Kalam','nightclub'),
        ),
        array(
            'value'  =>  'Kameron',
            'label'  =>  esc_html__('Kameron','nightclub'),
        ),
        array(
            'value'  =>  'Kantumruy',
            'label'  =>  esc_html__('Kantumruy','nightclub'),
        ),
        array(
            'value'  =>  'Karla',
            'label'  =>  esc_html__('Karla','nightclub'),
        ),
        array(
            'value'  =>  'Karma',
            'label'  =>  esc_html__('Karma','nightclub'),
        ),
        array(
            'value'  =>  'Kaushan Script',
            'label'  =>  esc_html__('Kaushan Scriptd','nightclub'),
        ),
        array(
            'value'  =>  'Kavoon',
            'label'  =>  esc_html__('Kavoon','nightclub'),
        ),
        array(
            'value'  =>  'Kdam Thmor',
            'label'  =>  esc_html__('Kdam Thmor','nightclub'),
        ),
        array(
            'value'  =>  'Keania One',
            'label'  =>  esc_html__('Keania One','nightclub'),
        ),
        array(
            'value'  =>  'Kelly Slab',
            'label'  =>  esc_html__('Kelly Slab','nightclub'),
        ),
        array(
            'value'  =>  'Kenia',
            'label'  =>  esc_html__('Kenia','nightclub'),
        ),
        array(
            'value'  =>  'Khand',
            'label'  =>  esc_html__('Khand','nightclub'),
        ),
        array(
            'value'  =>  'Khmer',
            'label'  =>  esc_html__('Khmer','nightclub'),
        ),
        array(
            'value'  =>  'Kite One',
            'label'  =>  esc_html__('Kite One','nightclub'),
        ),
        array(
            'value'  =>  'Knewave',
            'label'  =>  esc_html__('Knewave','nightclub'),
        ),
        array(
            'value'  =>  'Kotta One',
            'label'  =>  esc_html__('Kotta One','nightclub'),
        ),
        array(
            'value'  =>  'Koulen',
            'label'  =>  esc_html__('Koulen','nightclub'),
        ),
        array(
            'value'  =>  'Kranky',
            'label'  =>  esc_html__('Kranky','nightclub'),
        ),
        array(
            'value'  =>  'Kreon',
            'label'  =>  esc_html__('Kreon','nightclub'),
        ),
        array(
            'value'  =>  'Kristi',
            'label'  =>  esc_html__('Kristi','nightclub'),
        ),
        array(
            'value'  =>  'Krona One',
            'label'  =>  esc_html__('Krona One','nightclub'),
        ),
        array(
            'value'  =>  'La Belle Aurore',
            'label'  =>  esc_html__('La Belle Aurore','nightclub'),
        ),
        array(
            'value'  =>  'Laila',
            'label'  =>  esc_html__('Laila','nightclub'),
        ),
        array(
            'value'  =>  'Lancelot',
            'label'  =>  esc_html__('Lancelot','nightclub'),
        ),
        array(
            'value'  =>  'Lato',
            'label'  =>  esc_html__('Lato','nightclub'),
        ),
        array(
            'value'  =>  'League Script',
            'label'  =>  esc_html__('League Script','nightclub'),
        ),
        array(
            'value'  =>  'Leckerli One',
            'label'  =>  esc_html__('Leckerli One','nightclub'),
        ),
        array(
            'value'  =>  'Ledger',
            'label'  =>  esc_html__('Ledger','nightclub'),
        ),
        array(
            'value'  =>  'Lekton',
            'label'  =>  esc_html__('Lekton','nightclub'),
        ),
        array(
            'value'  =>  'Lemon',
            'label'  =>  esc_html__('Lemon','nightclub'),
        ),
        array(
            'value'  =>  'Libre Baskerville',
            'label'  =>  esc_html__('Libre Baskerville','nightclub'),
        ),
        array(
            'value'  =>  'Life Savers',
            'label'  =>  esc_html__('Life Savers','nightclub'),
        ),
        array(
            'value'  =>  'Lilita One',
            'label'  =>  esc_html__('Lilita One','nightclub'),
        ),
        array(
            'value'  =>  'Lily Script One',
            'label'  =>  esc_html__('Lily Script One','nightclub'),
        ),
        array(
            'value'  =>  'Limelight',
            'label'  =>  esc_html__('Limelight','nightclub'),
        ),
        array(
            'value'  =>  'Linden Hill',
            'label'  =>  esc_html__('Linden Hill','nightclub'),
        ),
        array(
            'value'  =>  'Lobster',
            'label'  =>  esc_html__('Lobster','nightclub'),
        ),
        array(
            'value'  =>  'Lobster Two',
            'label'  =>  esc_html__('Lobster Two','nightclub'),
        ),
        array(
            'value'  =>  'Londrina Outline',
            'label'  =>  esc_html__('Londrina Outline','nightclub'),
        ),
        array(
            'value'  =>  'Londrina Shadow',
            'label'  =>  esc_html__('Londrina Shadow','nightclub'),
        ),
        array(
            'value'  =>  'Londrina Sketch',
            'label'  =>  esc_html__('Londrina Sketch','nightclub'),
        ),
        array(
            'value'  =>  'Londrina Solid',
            'label'  =>  esc_html__('Londrina Solid','nightclub'),
        ),
        array(
            'value'  =>  'Lora',
            'label'  =>  esc_html__('Lora','nightclub'),
        ),
        array(
            'value'  =>  'Love Ya Like A Sister',
            'label'  =>  esc_html__('Love Ya Like A Sister','nightclub'),
        ),
        array(
            'value'  =>  'Loved by the King',
            'label'  =>  esc_html__('Loved by the King','nightclub'),
        ),
        array(
            'value'  =>  'Lovers Quarrel',
            'label'  =>  esc_html__('Lovers Quarrel','nightclub'),
        ),
        array(
            'value'  =>  'Luckiest Guy',
            'label'  =>  esc_html__('Luckiest Guy','nightclub'),
        ),
        array(
            'value'  =>  'Lusitana',
            'label'  =>  esc_html__('Lusitana','nightclub'),
        ),
        array(
            'value'  =>  'Lustria',
            'label'  =>  esc_html__('Lustria','nightclub'),
        ),
        array(
            'value'  =>  'Macondo',
            'label'  =>  esc_html__('Macondo','nightclub'),
        ),
        array(
            'value'  =>  'Macondo Swash Caps',
            'label'  =>  esc_html__('Macondo Swash Caps','nightclub'),
        ),
        array(
            'value'  =>  'Magra',
            'label'  =>  esc_html__('Magra','nightclub'),
        ),
        array(
            'value'  =>  'Maiden Orange',
            'label'  =>  esc_html__('Maiden Orange','nightclub'),
        ),
        array(
            'value'  =>  'Marcellus',
            'label'  =>  esc_html__('Marcellus','nightclub'),
        ),
        array(
            'value'  =>  'Marcellus SC',
            'label'  =>  esc_html__('Marcellus SC','nightclub'),
        ),
        array(
            'value'  =>  'Marck Script',
            'label'  =>  esc_html__('Marck Script','nightclub'),
        ),
        array(
            'value'  =>  'Margarine',
            'label'  =>  esc_html__('Margarine','nightclub'),
        ),
        array(
            'value'  =>  'Marko One',
            'label'  =>  esc_html__('Marko One','nightclub'),
        ),
        array(
            'value'  =>  'Marmelad',
            'label'  =>  esc_html__('Marmelad','nightclub'),
        ),
        array(
            'value'  =>  'Marvel',
            'label'  =>  esc_html__('Marvel','nightclub'),
        ),
        array(
            'value'  =>  'Mate',
            'label'  =>  esc_html__('Mate','nightclub'),
        ),
        array(
            'value'  =>  'Mate SC',
            'label'  =>  esc_html__('Mate SC','nightclub'),
        ),
        array(
            'value'  =>  'Maven Pro',
            'label'  =>  esc_html__('Maven Pro','nightclub'),
        ),
        array(
            'value'  =>  'McLaren',
            'label'  =>  esc_html__('McLaren','nightclub'),
        ),
        array(
            'value'  =>  'Meddon',
            'label'  =>  esc_html__('Meddon','nightclub'),
        ),
        array(
            'value'  =>  'MedievalSharp',
            'label'  =>  esc_html__('MedievalSharp','nightclub'),
        ),
        array(
            'value'  =>  'Medula One',
            'label'  =>  esc_html__('Medula One','nightclub'),
        ),
        array(
            'value'  =>  'Megrim',
            'label'  =>  esc_html__('Megrim','nightclub'),
        ),
        array(
            'value'  =>  'Meie Script',
            'label'  =>  esc_html__('Meie Script','nightclub'),
        ),
        array(
            'value'  =>  'League Script',
            'label'  =>  esc_html__('League Script','nightclub'),
        ),
        array(
            'value'  =>  'Merienda',
            'label'  =>  esc_html__('Merienda','nightclub'),
        ),
        array(
            'value'  =>  'Merienda One',
            'label'  =>  esc_html__('Merienda One','nightclub'),
        ),
        array(
            'value'  =>  'Merriweather',
            'label'  =>  esc_html__('Merriweather','nightclub'),
        ),
        array(
            'value'  =>  'Merriweather Sans',
            'label'  =>  esc_html__('Merriweather Sans','nightclub'),
        ),
        array(
            'value'  =>  'Metal',
            'label'  =>  esc_html__('Metal','nightclub'),
        ),
        array(
            'value'  =>  'Metal Mania',
            'label'  =>  esc_html__('Metal Mania','nightclub'),
        ),
        array(
            'value'  =>  'Metamorphous',
            'label'  =>  esc_html__('Metamorphous','nightclub'),
        ),
        array(
            'value'  =>  'Metrophobic',
            'label'  =>  esc_html__('Metrophobic','nightclub'),
        ),
        array(
            'value'  =>  'Michroma',
            'label'  =>  esc_html__('Michroma','nightclub'),
        ),
        array(
            'value'  =>  'Milonga',
            'label'  =>  esc_html__('Milonga','nightclub'),
        ),
        array(
            'value'  =>  'Miltonian',
            'label'  =>  esc_html__('Miltonian','nightclub'),
        ),
        array(
            'value'  =>  'Miltonian Tattoo',
            'label'  =>  esc_html__('Miltonian Tattoo','nightclub'),
        ),
        array(
            'value'  =>  'Miniver',
            'label'  =>  esc_html__('Miniver','nightclub'),
        ),
        array(
            'value'  =>  'Miss Fajardose',
            'label'  =>  esc_html__('Miss Fajardose','nightclub'),
        ),
        array(
            'value'  =>  'Modern Antiqua',
            'label'  =>  esc_html__('Modern Antiqua','nightclub'),
        ),
        array(
            'value'  =>  'Molengo',
            'label'  =>  esc_html__('Molengo','nightclub'),
        ),
        array(
            'value'  =>  'Molle',
            'label'  =>  esc_html__('Molle','nightclub'),
        ),
        array(
            'value'  =>  'Monda',
            'label'  =>  esc_html__('Monda','nightclub'),
        ),
        array(
            'value'  =>  'Monofett',
            'label'  =>  esc_html__('Monofett','nightclub'),
        ),
        array(
            'value'  =>  'Monoton',
            'label'  =>  esc_html__('Monoton','nightclub'),
        ),
        array(
            'value'  =>  'Monsieur La Doulaise',
            'label'  =>  esc_html__('Monsieur La Doulaise','nightclub'),
        ),
        array(
            'value'  =>  'Montaga',
            'label'  =>  esc_html__('Montaga','nightclub'),
        ),
        array(
            'value'  =>  'Montez',
            'label'  =>  esc_html__('Montez','nightclub'),
        ),
        array(
            'value'  =>  'Montserrat',
            'label'  =>  esc_html__('Montserrat','nightclub'),
        ),
        array(
            'value'  =>  'Montserrat Alternates',
            'label'  =>  esc_html__('Montserrat Alternates','nightclub'),
        ),
        array(
            'value'  =>  'Montserrat Subrayada',
            'label'  =>  esc_html__('Montserrat Subrayada','nightclub'),
        ),
        array(
            'value'  =>  'Moul',
            'label'  =>  esc_html__('Moul','nightclub'),
        ),
        array(
            'value'  =>  'Moulpali',
            'label'  =>  esc_html__('Moulpali','nightclub'),
        ),
        array(
            'value'  =>  'Mountains of Christmas',
            'label'  =>  esc_html__('Mountains of Christmas','nightclub'),
        ),
        array(
            'value'  =>  'Mouse Memoirs',
            'label'  =>  esc_html__('Mouse Memoirs','nightclub'),
        ),
        array(
            'value'  =>  'Mr Bedfort',
            'label'  =>  esc_html__('Mr Bedfort','nightclub'),
        ),
        array(
            'value'  =>  'Mr Dafoe',
            'label'  =>  esc_html__('Mr Dafoe','nightclub'),
        ),
        array(
            'value'  =>  'Mr De Haviland',
            'label'  =>  esc_html__('Mr De Haviland','nightclub'),
        ),
        array(
            'value'  =>  'Mrs Saint Delafield',
            'label'  =>  esc_html__('Mrs Saint Delafield','nightclub'),
        ),
        array(
            'value'  =>  'Mrs Sheppards',
            'label'  =>  esc_html__('Mrs Sheppards','nightclub'),
        ),
        array(
            'value'  =>  'Muli',
            'label'  =>  esc_html__('Muli','nightclub'),
        ),
        array(
            'value'  =>  'Mystery Quest',
            'label'  =>  esc_html__('Mystery Quest','nightclub'),
        ),
        array(
            'value'  =>  'Neucha',
            'label'  =>  esc_html__('Neucha','nightclub'),
        ),
        array(
            'value'  =>  'Neuton',
            'label'  =>  esc_html__('Neuton','nightclub'),
        ),
        array(
            'value'  =>  'New Rocker',
            'label'  =>  esc_html__('New Rocker','nightclub'),
        ),
        array(
            'value'  =>  'News Cycle',
            'label'  =>  esc_html__('News Cycle','nightclub'),
        ),
        array(
            'value'  =>  'Niconne',
            'label'  =>  esc_html__('Niconne','nightclub'),
        ),
        array(
            'value'  =>  'Nixie One',
            'label'  =>  esc_html__('Nixie One','nightclub'),
        ),
        array(
            'value'  =>  'Nobile',
            'label'  =>  esc_html__('Nobile','nightclub'),
        ),
        array(
            'value'  =>  'Nokora',
            'label'  =>  esc_html__('Nokora','nightclub'),
        ),
        array(
            'value'  =>  'Norican',
            'label'  =>  esc_html__('Norican','nightclub'),
        ),
        array(
            'value'  =>  'Nosifer',
            'label'  =>  esc_html__('Nosifer','nightclub'),
        ),
        array(
            'value'  =>  'Nothing You Could Do',
            'label'  =>  esc_html__('Nothing You Could Do','nightclub'),
        ),
        array(
            'value'  =>  'Noticia Text',
            'label'  =>  esc_html__('Noticia Text','nightclub'),
        ),
        array(
            'value'  =>  'Noto Sans',
            'label'  =>  esc_html__('Noto Sans','nightclub'),
        ),
        array(
            'value'  =>  'Noto Serif',
            'label'  =>  esc_html__('Noto Serif','nightclub'),
        ),
        array(
            'value'  =>  'Nova Cut',
            'label'  =>  esc_html__('Nova Cut','nightclub'),
        ),
        array(
            'value'  =>  'Nova Flat',
            'label'  =>  esc_html__('Nova Flat','nightclub'),
        ),
        array(
            'value'  =>  'Nova Mono',
            'label'  =>  esc_html__('Nova Mono','nightclub'),
        ),
        array(
            'value'  =>  'Nova Oval',
            'label'  =>  esc_html__('Nova Oval','nightclub'),
        ),
        array(
            'value'  =>  'Nova Round',
            'label'  =>  esc_html__('Nova Round','nightclub'),
        ),
        array(
            'value'  =>  'Nova Script',
            'label'  =>  esc_html__('Nova Script','nightclub'),
        ),
        array(
            'value'  =>  'Nova Slim',
            'label'  =>  esc_html__('Nova Slim','nightclub'),
        ),
        array(
            'value'  =>  'Nova Square',
            'label'  =>  esc_html__('Nova Square','nightclub'),
        ),
        array(
            'value'  =>  'Numans',
            'label'  =>  esc_html__('Numans','nightclub'),
        ),
        array(
            'value'  =>  'Nunito',
            'label'  =>  esc_html__('Nunito','nightclub'),
        ),
        array(
            'value'  =>  'Odor Mean Chey',
            'label'  =>  esc_html__('Odor Mean Chey','nightclub'),
        ),
        array(
            'value'  =>  'Offside',
            'label'  =>  esc_html__('Offside','nightclub'),
        ),
        array(
            'value'  =>  'Old Standard TT',
            'label'  =>  esc_html__('Old Standard TT','nightclub'),
        ),
        array(
            'value'  =>  'Oldenburg',
            'label'  =>  esc_html__('Oldenburg','nightclub'),
        ),
        array(
            'value'  =>  'Oleo Script',
            'label'  =>  esc_html__('Oleo Script','nightclub'),
        ),
        array(
            'value'  =>  'Oleo Script Swash Caps',
            'label'  =>  esc_html__('Oleo Script Swash Caps','nightclub'),
        ),
        array(
            'value'  =>  'Open Sans',
            'label'  =>  esc_html__('Open Sans','nightclub'),
        ),
        array(
            'value'  =>  'Open Sans Condensed',
            'label'  =>  esc_html__('Open Sans Condensed','nightclub'),
        ),
        array(
            'value'  =>  'Oranienbaum',
            'label'  =>  esc_html__('Oranienbaum','nightclub'),
        ),
        array(
            'value'  =>  'Orbitron',
            'label'  =>  esc_html__('Orbitron','nightclub'),
        ),
        array(
            'value'  =>  'Oregano',
            'label'  =>  esc_html__('Oregano','nightclub'),
        ),
        array(
            'value'  =>  'Orienta',
            'label'  =>  esc_html__('Orienta','nightclub'),
        ),
        array(
            'value'  =>  'Original Surfer',
            'label'  =>  esc_html__('Original Surfer','nightclub'),
        ),
        array(
            'value'  =>  'Oswald',
            'label'  =>  esc_html__('Oswald','nightclub'),
        ),
        array(
            'value'  =>  'Over the Rainbow',
            'label'  =>  esc_html__('Over the Rainbow','nightclub'),
        ),
        array(
            'value'  =>  'Overlock',
            'label'  =>  esc_html__('Overlock','nightclub'),
        ),
        array(
            'value'  =>  'Overlock SC',
            'label'  =>  esc_html__('Overlock SC','nightclub'),
        ),
        array(
            'value'  =>  'Ovo',
            'label'  =>  esc_html__('Ovo','nightclub'),
        ),
        array(
            'value'  =>  'Oxygen',
            'label'  =>  esc_html__('Oxygen','nightclub'),
        ),
        array(
            'value'  =>  'Oxygen Mono',
            'label'  =>  esc_html__('Oxygen Mono','nightclub'),
        ),
        array(
            'value'  =>  'PT Mono',
            'label'  =>  esc_html__('PT Mono','nightclub'),
        ),
        array(
            'value'  =>  'PT Sans',
            'label'  =>  esc_html__('PT Sans','nightclub'),
        ),
        array(
            'value'  =>  'PT Sans Caption',
            'label'  =>  esc_html__('PT Sans Caption','nightclub'),
        ),
        array(
            'value'  =>  'PT Sans Narrow',
            'label'  =>  esc_html__('PT Sans Narrow','nightclub'),
        ),
        array(
            'value'  =>  'PT Serif',
            'label'  =>  esc_html__('PT Serif','nightclub'),
        ),
        array(
            'value'  =>  'PT Serif Caption',
            'label'  =>  esc_html__('PT Serif Caption','nightclub'),
        ),
        array(
            'value'  =>  'Pacifico',
            'label'  =>  esc_html__('Pacifico','nightclub'),
        ),
        array(
            'value'  =>  'Paprika',
            'label'  =>  esc_html__('Paprika','nightclub'),
        ),
        array(
            'value'  =>  'Parisienne',
            'label'  =>  esc_html__('Parisienne','nightclub'),
        ),
        array(
            'value'  =>  'Passero One',
            'label'  =>  esc_html__('Passero One','nightclub'),
        ),
        array(
            'value'  =>  'Passion One',
            'label'  =>  esc_html__('Passion One','nightclub'),
        ),
        array(
            'value'  =>  'Pathway Gothic One',
            'label'  =>  esc_html__('Pathway Gothic One','nightclub'),
        ),
        array(
            'value'  =>  'Patrick Hand',
            'label'  =>  esc_html__('Patrick Hand','nightclub'),
        ),
        array(
            'value'  =>  'Patrick Hand SC',
            'label'  =>  esc_html__('Patrick Hand SC','nightclub'),
        ),
        array(
            'value'  =>  'Patua One',
            'label'  =>  esc_html__('Patua One','nightclub'),
        ),
        array(
            'value'  =>  'Paytone One',
            'label'  =>  esc_html__('Paytone One','nightclub'),
        ),
        array(
            'value'  =>  'Peralta',
            'label'  =>  esc_html__('Peralta','nightclub'),
        ),
        array(
            'value'  =>  'Permanent Marker',
            'label'  =>  esc_html__('Permanent Marker','nightclub'),
        ),
        array(
            'value'  =>  'Petit Formal Script',
            'label'  =>  esc_html__('Petit Formal Script','nightclub'),
        ),
        array(
            'value'  =>  'Petrona',
            'label'  =>  esc_html__('Petrona','nightclub'),
        ),
        array(
            'value'  =>  'Philosopher',
            'label'  =>  esc_html__('Philosopher','nightclub'),
        ),
        array(
            'value'  =>  'Piedra',
            'label'  =>  esc_html__('Piedra','nightclub'),
        ),
        array(
            'value'  =>  'Pinyon Script',
            'label'  =>  esc_html__('Pinyon Script','nightclub'),
        ),
        array(
            'value'  =>  'Pirata One',
            'label'  =>  esc_html__('Pirata One','nightclub'),
        ),
        array(
            'value'  =>  'Plaster',
            'label'  =>  esc_html__('Plaster','nightclub'),
        ),
        array(
            'value'  =>  'Play',
            'label'  =>  esc_html__('Play','nightclub'),
        ),
        array(
            'value'  =>  'Playball',
            'label'  =>  esc_html__('Playball','nightclub'),
        ),
        array(
            'value'  =>  'Playfair Display',
            'label'  =>  esc_html__('Playfair Display','nightclub'),
        ),
        array(
            'value'  =>  'Playfair Display SC',
            'label'  =>  esc_html__('Playfair Display SC','nightclub'),
        ),
        array(
            'value'  =>  'Podkova',
            'label'  =>  esc_html__('Podkova','nightclub'),
        ),
        array(
            'value'  =>  'Poiret One',
            'label'  =>  esc_html__('Poiret One','nightclub'),
        ),
        array(
            'value'  =>  'Poller One',
            'label'  =>  esc_html__('Poller One','nightclub'),
        ),
        array(
            'value'  =>  'Poly',
            'label'  =>  esc_html__('Poly','nightclub'),
        ),
        array(
            'value'  =>  'Pompiere',
            'label'  =>  esc_html__('Pompiere','nightclub'),
        ),
        array(
            'value'  =>  'Pontano Sans',
            'label'  =>  esc_html__('Pontano Sans','nightclub'),
        ),
        array(
            'value'  =>  'Poppins',
            'label'  =>  esc_html__('Poppins','nightclub'),
        ),
        array(
            'value'  =>  'Port Lligat Sans',
            'label'  =>  esc_html__('Port Lligat Sans','nightclub'),
        ),
        array(
            'value'  =>  'Port Lligat Slab',
            'label'  =>  esc_html__('Port Lligat Slab','nightclub'),
        ),
        array(
            'value'  =>  'Prata',
            'label'  =>  esc_html__('Prata','nightclub'),
        ),
        array(
            'value'  =>  'Preahvihear',
            'label'  =>  esc_html__('Preahvihear','nightclub'),
        ),
        array(
            'value'  =>  'Press Start 2P',
            'label'  =>  esc_html__('Press Start 2P','nightclub'),
        ),
        array(
            'value'  =>  'Princess Sofia',
            'label'  =>  esc_html__('Princess Sofia','nightclub'),
        ),
        array(
            'value'  =>  'Prociono',
            'label'  =>  esc_html__('Prociono','nightclub'),
        ),
        array(
            'value'  =>  'Prosto One',
            'label'  =>  esc_html__('Prosto One','nightclub'),
        ),
        array(
            'value'  =>  'Puritan',
            'label'  =>  esc_html__('Puritan','nightclub'),
        ),
        array(
            'value'  =>  'Purple Purse',
            'label'  =>  esc_html__('Purple Purse','nightclub'),
        ),
        array(
            'value'  =>  'Quando',
            'label'  =>  esc_html__('Quando','nightclub'),
        ),
        array(
            'value'  =>  'Quantico',
            'label'  =>  esc_html__('Quantico','nightclub'),
        ),
        array(
            'value'  =>  'Quattrocento',
            'label'  =>  esc_html__('Quattrocento','nightclub'),
        ),
        array(
            'value'  =>  'Quattrocento Sans',
            'label'  =>  esc_html__('Quattrocento Sans','nightclub'),
        ),
        array(
            'value'  =>  'Questrial',
            'label'  =>  esc_html__('Questrial','nightclub'),
        ),
        array(
            'value'  =>  'Quicksand',
            'label'  =>  esc_html__('Quicksand','nightclub'),
        ),
        array(
            'value'  =>  'Quintessential',
            'label'  =>  esc_html__('Quintessential','nightclub'),
        ),
        array(
            'value'  =>  'Qwigley',
            'label'  =>  esc_html__('Qwigley','nightclub'),
        ),
        array(
            'value'  =>  'Racing Sans One',
            'label'  =>  esc_html__('Racing Sans One','nightclub'),
        ),
        array(
            'value'  =>  'Radley',
            'label'  =>  esc_html__('Radley','nightclub'),
        ),
        array(
            'value'  =>  'Rajdhani',
            'label'  =>  esc_html__('Rajdhani','nightclub'),
        ),
        array(
            'value'  =>  'Raleway',
            'label'  =>  esc_html__('Raleway','nightclub'),
        ),
        array(
            'value'  =>  'Raleway Dots',
            'label'  =>  esc_html__('Raleway Dots','nightclub'),
        ),
        array(
            'value'  =>  'Rambla',
            'label'  =>  esc_html__('Rambla','nightclub'),
        ),
        array(
            'value'  =>  'Rammetto One',
            'label'  =>  esc_html__('Rammetto One','nightclub'),
        ),
        array(
            'value'  =>  'Ranchers',
            'label'  =>  esc_html__('Ranchers','nightclub'),
        ),
        array(
            'value'  =>  'Rancho',
            'label'  =>  esc_html__('Rancho','nightclub'),
        ),
        array(
            'value'  =>  'Rationale',
            'label'  =>  esc_html__('Rationale','nightclub'),
        ),
        array(
            'value'  =>  'Redressed',
            'label'  =>  esc_html__('Redressed','nightclub'),
        ),
        array(
            'value'  =>  'Reenie Beanie',
            'label'  =>  esc_html__('Reenie Beanie','nightclub'),
        ),
        array(
            'value'  =>  'Revalia',
            'label'  =>  esc_html__('Revalia','nightclub'),
        ),
        array(
            'value'  =>  'Ribeye',
            'label'  =>  esc_html__('Ribeye','nightclub'),
        ),
        array(
            'value'  =>  'Ribeye Marrow',
            'label'  =>  esc_html__('Ribeye Marrow','nightclub'),
        ),
        array(
            'value'  =>  'Righteous',
            'label'  =>  esc_html__('Righteous','nightclub'),
        ),
        array(
            'value'  =>  'Risque',
            'label'  =>  esc_html__('Risque','nightclub'),
        ),
        array(
            'value'  =>  'Roboto',
            'label'  =>  esc_html__('Roboto','nightclub'),
        ),
        array(
            'value'  =>  'Roboto Condensed',
            'label'  =>  esc_html__('Roboto Condensed','nightclub'),
        ),
        array(
            'value'  =>  'Roboto Slab',
            'label'  =>  esc_html__('Roboto Slab','nightclub'),
        ),
        array(
            'value'  =>  'Rochester',
            'label'  =>  esc_html__('Rochester','nightclub'),
        ),
        array(
            'value'  =>  'Rock Salt',
            'label'  =>  esc_html__('Rock Salt','nightclub'),
        ),
        array(
            'value'  =>  'Rokkitt',
            'label'  =>  esc_html__('Rokkitt','nightclub'),
        ),
        array(
            'value'  =>  'Romanesco',
            'label'  =>  esc_html__('Romanesco','nightclub'),
        ),
        array(
            'value'  =>  'Ropa Sans',
            'label'  =>  esc_html__('Ropa Sans','nightclub'),
        ),
        array(
            'value'  =>  'Rosario',
            'label'  =>  esc_html__('Rosario','nightclub'),
        ),
        array(
            'value'  =>  'Rosarivo',
            'label'  =>  esc_html__('Rosarivo','nightclub'),
        ),
        array(
            'value'  =>  'Rouge Script',
            'label'  =>  esc_html__('Rouge Script','nightclub'),
        ),
        array(
            'value'  =>  'Rozha One',
            'label'  =>  esc_html__('Rozha One','nightclub'),
        ),
        array(
            'value'  =>  'Rubik Mono One',
            'label'  =>  esc_html__('Rubik Mono One','nightclub'),
        ),
        array(
            'value'  =>  'Rubik One',
            'label'  =>  esc_html__('Rubik One','nightclub'),
        ),
        array(
            'value'  =>  'Ruda',
            'label'  =>  esc_html__('Ruda','nightclub'),
        ),
        array(
            'value'  =>  'Rufina',
            'label'  =>  esc_html__('Rufina','nightclub'),
        ),
        array(
            'value'  =>  'Ruge Boogie',
            'label'  =>  esc_html__('Ruge Boogie','nightclub'),
        ),
        array(
            'value'  =>  'Ruluko',
            'label'  =>  esc_html__('Ruluko','nightclub'),
        ),
        array(
            'value'  =>  'Rum Raisin',
            'label'  =>  esc_html__('Rum Raisin','nightclub'),
        ),
        array(
            'value'  =>  'Ruslan Display',
            'label'  =>  esc_html__('Ruslan Display','nightclub'),
        ),
        array(
            'value'  =>  'Russo One',
            'label'  =>  esc_html__('Russo One','nightclub'),
        ),
        array(
            'value'  =>  'Ruthie',
            'label'  =>  esc_html__('Ruthie','nightclub'),
        ),
        array(
            'value'  =>  'Rye',
            'label'  =>  esc_html__('Rye','nightclub'),
        ),
        array(
            'value'  =>  'Sacramento',
            'label'  =>  esc_html__('Sacramento','nightclub'),
        ),
        array(
            'value'  =>  'Sail',
            'label'  =>  esc_html__('Sail','nightclub'),
        ),
        array(
            'value'  =>  'Salsa',
            'label'  =>  esc_html__('Salsa','nightclub'),
        ),
        array(
            'value'  =>  'Sanchez',
            'label'  =>  esc_html__('Sanchez','nightclub'),
        ),
        array(
            'value'  =>  'Sancreek',
            'label'  =>  esc_html__('Sancreek','nightclub'),
        ),
        array(
            'value'  =>  'Sansita One',
            'label'  =>  esc_html__('Sansita One','nightclub'),
        ),
        array(
            'value'  =>  'Sarina',
            'label'  =>  esc_html__('Sarina','nightclub'),
        ),
        array(
            'value'  =>  'Sarpanch',
            'label'  =>  esc_html__('Sarpanch','nightclub'),
        ),
        array(
            'value'  =>  'Satisfy',
            'label'  =>  esc_html__('Satisfy','nightclub'),
        ),
        array(
            'value'  =>  'Scada',
            'label'  =>  esc_html__('Scada','nightclub'),
        ),
        array(
            'value'  =>  'Schoolbell',
            'label'  =>  esc_html__('Schoolbell','nightclub'),
        ),
        array(
            'value'  =>  'Seaweed Script',
            'label'  =>  esc_html__('Seaweed Script','nightclub'),
        ),
        array(
            'value'  =>  'Sevillana',
            'label'  =>  esc_html__('Sevillana','nightclub'),
        ),
        array(
            'value'  =>  'Seymour One',
            'label'  =>  esc_html__('Seymour One','nightclub'),
        ),
        array(
            'value'  =>  'Shadows Into Light',
            'label'  =>  esc_html__('Shadows Into Light','nightclub'),
        ),
        array(
            'value'  =>  'Shadows Into Light Two',
            'label'  =>  esc_html__('Shadows Into Light Two','nightclub'),
        ),
        array(
            'value'  =>  'Shanti',
            'label'  =>  esc_html__('Shanti','nightclub'),
        ),
        array(
            'value'  =>  'Share',
            'label'  =>  esc_html__('Share','nightclub'),
        ),
        array(
            'value'  =>  'Share Tech',
            'label'  =>  esc_html__('Share Tech','nightclub'),
        ),
        array(
            'value'  =>  'Share Tech Mono',
            'label'  =>  esc_html__('Share Tech Mono','nightclub'),
        ),
        array(
            'value'  =>  'Shojumaru',
            'label'  =>  esc_html__('Shojumaru','nightclub'),
        ),
        array(
            'value'  =>  'Short Stack',
            'label'  =>  esc_html__('Short Stack','nightclub'),
        ),
        array(
            'value'  =>  'Siemreap',
            'label'  =>  esc_html__('Siemreap','nightclub'),
        ),
        array(
            'value'  =>  'Sigmar One',
            'label'  =>  esc_html__('Sigmar One','nightclub'),
        ),
        array(
            'value'  =>  'Signika',
            'label'  =>  esc_html__('Signika','nightclub'),
        ),
        array(
            'value'  =>  'Signika Negative',
            'label'  =>  esc_html__('Signika Negative','nightclub'),
        ),
        array(
            'value'  =>  'Simonetta',
            'label'  =>  esc_html__('Simonetta','nightclub'),
        ),
        array(
            'value'  =>  'Sintony',
            'label'  =>  esc_html__('Sintony','nightclub'),
        ),
        array(
            'value'  =>  'Sirin Stencil',
            'label'  =>  esc_html__('Sirin Stencil','nightclub'),
        ),
        array(
            'value'  =>  'Six Caps',
            'label'  =>  esc_html__('Six Caps','nightclub'),
        ),
        array(
            'value'  =>  'Skranji',
            'label'  =>  esc_html__('Skranji','nightclub'),
        ),
        array(
            'value'  =>  'Slabo 13px',
            'label'  =>  esc_html__('Slabo 13px','nightclub'),
        ),
        array(
            'value'  =>  'Slabo 27px',
            'label'  =>  esc_html__('Slabo 27px','nightclub'),
        ),
        array(
            'value'  =>  'Slackey',
            'label'  =>  esc_html__('Slackey','nightclub'),
        ),
        array(
            'value'  =>  'Smokum',
            'label'  =>  esc_html__('Smokum','nightclub'),
        ),
        array(
            'value'  =>  'Smythe',
            'label'  =>  esc_html__('Smythe','nightclub'),
        ),
        array(
            'value'  =>  'Sniglet',
            'label'  =>  esc_html__('Sniglet','nightclub'),
        ),
        array(
            'value'  =>  'Snippet',
            'label'  =>  esc_html__('Snippet','nightclub'),
        ),
        array(
            'value'  =>  'Snowburst One',
            'label'  =>  esc_html__('Snowburst One','nightclub'),
        ),
        array(
            'value'  =>  'Sofadi One',
            'label'  =>  esc_html__('Sofadi One','nightclub'),
        ),
        array(
            'value'  =>  'Sofia',
            'label'  =>  esc_html__('Sofia','nightclub'),
        ),
        array(
            'value'  =>  'Sonsie One',
            'label'  =>  esc_html__('Sonsie One','nightclub'),
        ),
        array(
            'value'  =>  'Sorts Mill Goudy',
            'label'  =>  esc_html__('Sorts Mill Goudy','nightclub'),
        ),
        array(
            'value'  =>  'Source Code Pro',
            'label'  =>  esc_html__('Source Code Pro','nightclub'),
        ),
        array(
            'value'  =>  'Source Sans Pro',
            'label'  =>  esc_html__('Source Sans Pro','nightclub'),
        ),
        array(
            'value'  =>  'Source Serif Pro',
            'label'  =>  esc_html__('Source Serif Pro','nightclub'),
        ),
        array(
            'value'  =>  'Special Elite',
            'label'  =>  esc_html__('Special Elite','nightclub'),
        ),
        array(
            'value'  =>  'Spicy Rice',
            'label'  =>  esc_html__('Spicy Rice','nightclub'),
        ),
        array(
            'value'  =>  'Spinnaker',
            'label'  =>  esc_html__('Spinnaker','nightclub'),
        ),
        array(
            'value'  =>  'Spirax',
            'label'  =>  esc_html__('Spirax','nightclub'),
        ),
        array(
            'value'  =>  'Squada One',
            'label'  =>  esc_html__('Squada One','nightclub'),
        ),
        array(
            'value'  =>  'Stalemate',
            'label'  =>  esc_html__('Stalemate','nightclub'),
        ),
        array(
            'value'  =>  'Stalinist One',
            'label'  =>  esc_html__('Stalinist One','nightclub'),
        ),
        array(
            'value'  =>  'Stardos Stencil',
            'label'  =>  esc_html__('Stardos Stencil','nightclub'),
        ),
        array(
            'value'  =>  'Stint Ultra Condensed',
            'label'  =>  esc_html__('Stint Ultra Condensed','nightclub'),
        ),
        array(
            'value'  =>  'Stint Ultra Expanded',
            'label'  =>  esc_html__('Stint Ultra Expanded','nightclub'),
        ),
        array(
            'value'  =>  'Stoke',
            'label'  =>  esc_html__('Stoke','nightclub'),
        ),
        array(
            'value'  =>  'Strait',
            'label'  =>  esc_html__('Strait','nightclub'),
        ),
        array(
            'value'  =>  'Sue Ellen Francisco',
            'label'  =>  esc_html__('Sue Ellen Francisco','nightclub'),
        ),
        array(
            'value'  =>  'Sunshiney',
            'label'  =>  esc_html__('Sunshiney','nightclub'),
        ),
        array(
            'value'  =>  'Supermercado One',
            'label'  =>  esc_html__('Supermercado One','nightclub'),
        ),
        array(
            'value'  =>  'Suwannaphum',
            'label'  =>  esc_html__('Suwannaphum','nightclub'),
        ),
        array(
            'value'  =>  'Swanky and Moo Moo',
            'label'  =>  esc_html__('Swanky and Moo Moo','nightclub'),
        ),
        array(
            'value'  =>  'Syncopate',
            'label'  =>  esc_html__('Syncopate','nightclub'),
        ),
        array(
            'value'  =>  'Tangerine',
            'label'  =>  esc_html__('Tangerine','nightclub'),
        ),
        array(
            'value'  =>  'Taprom',
            'label'  =>  esc_html__('Taprom','nightclub'),
        ),
        array(
            'value'  =>  'Tauri',
            'label'  =>  esc_html__('Tauri','nightclub'),
        ),
        array(
            'value'  =>  'Teko',
            'label'  =>  esc_html__('Teko','nightclub'),
        ),
        array(
            'value'  =>  'Telex',
            'label'  =>  esc_html__('Telex','nightclub'),
        ),
        array(
            'value'  =>  'Tenor Sans',
            'label'  =>  esc_html__('Tenor Sans','nightclub'),
        ),
        array(
            'value'  =>  'Text Me One',
            'label'  =>  esc_html__('Text Me One','nightclub'),
        ),
        array(
            'value'  =>  'The Girl Next Door',
            'label'  =>  esc_html__('The Girl Next Door','nightclub'),
        ),
        array(
            'value'  =>  'Tienne',
            'label'  =>  esc_html__('Tienne','nightclub'),
        ),
        array(
            'value'  =>  'Tinos',
            'label'  =>  esc_html__('Tinos','nightclub'),
        ),
        array(
            'value'  =>  'Titan One',
            'label'  =>  esc_html__('Titan One','nightclub'),
        ),
        array(
            'value'  =>  'Titillium Web',
            'label'  =>  esc_html__('Titillium Web','nightclub'),
        ),
        array(
            'value'  =>  'Trade Winds',
            'label'  =>  esc_html__('Trade Winds','nightclub'),
        ),
        array(
            'value'  =>  'Trocchi',
            'label'  =>  esc_html__('Trocchi','nightclub'),
        ),
        array(
            'value'  =>  'Trochut',
            'label'  =>  esc_html__('Trochut','nightclub'),
        ),
        array(
            'value'  =>  'Trykker',
            'label'  =>  esc_html__('Trykker','nightclub'),
        ),
        array(
            'value'  =>  'Tulpen One',
            'label'  =>  esc_html__('Tulpen One','nightclub'),
        ),
        array(
            'value'  =>  'Ubuntu',
            'label'  =>  esc_html__('Ubuntu','nightclub'),
        ),
        array(
            'value'  =>  'Ubuntu Condensed',
            'label'  =>  esc_html__('Ubuntu Condensed','nightclub'),
        ),
        array(
            'value'  =>  'Ubuntu Mono',
            'label'  =>  esc_html__('Ubuntu Mono','nightclub'),
        ),
        array(
            'value'  =>  'Ultra',
            'label'  =>  esc_html__('Ultra','nightclub'),
        ),
        array(
            'value'  =>  'Uncial Antiqua',
            'label'  =>  esc_html__('Uncial Antiqua','nightclub'),
        ),
        array(
            'value'  =>  'Underdog',
            'label'  =>  esc_html__('Underdog','nightclub'),
        ),
        array(
            'value'  =>  'Unica One',
            'label'  =>  esc_html__('Unica One','nightclub'),
        ),
        array(
            'value'  =>  'UnifrakturCook',
            'label'  =>  esc_html__('UnifrakturCook','nightclub'),
        ),
        array(
            'value'  =>  'UnifrakturMaguntia',
            'label'  =>  esc_html__('UnifrakturMaguntia','nightclub'),
        ),
        array(
            'value'  =>  'Unkempt',
            'label'  =>  esc_html__('Unkempt','nightclub'),
        ),
        array(
            'value'  =>  'Unlock',
            'label'  =>  esc_html__('Unlock','nightclub'),
        ),
        array(
            'value'  =>  'Unna',
            'label'  =>  esc_html__('Unna','nightclub'),
        ),
        array(
            'value'  =>  'VT323',
            'label'  =>  esc_html__('VT323','nightclub'),
        ),
        array(
            'value'  =>  'Vampiro One',
            'label'  =>  esc_html__('Vampiro One','nightclub'),
        ),
        array(
            'value'  =>  'Varela',
            'label'  =>  esc_html__('Varela','nightclub'),
        ),
        array(
            'value'  =>  'Varela Round',
            'label'  =>  esc_html__('Varela Round','nightclub'),
        ),
        array(
            'value'  =>  'Vast Shadow',
            'label'  =>  esc_html__('Vast Shadow','nightclub'),
        ),
        array(
            'value'  =>  'Vesper Libre',
            'label'  =>  esc_html__('Vesper Libre','nightclub'),
        ),
        array(
            'value'  =>  'Vibur',
            'label'  =>  esc_html__('Vibur','nightclub'),
        ),
        array(
            'value'  =>  'Vidaloka',
            'label'  =>  esc_html__('Vidaloka','nightclub'),
        ),
        array(
            'value'  =>  'Viga',
            'label'  =>  esc_html__('Viga','nightclub'),
        ),
        array(
            'value'  =>  'Voces',
            'label'  =>  esc_html__('Voces','nightclub'),
        ),
        array(
            'value'  =>  'Volkhov',
            'label'  =>  esc_html__('Volkhov','nightclub'),
        ),
        array(
            'value'  =>  'Vollkorn',
            'label'  =>  esc_html__('Vollkorn','nightclub'),
        ),
        array(
            'value'  =>  'Voltaire',
            'label'  =>  esc_html__('Voltaire','nightclub'),
        ),
        array(
            'value'  =>  'Waiting for the Sunrise',
            'label'  =>  esc_html__('Waiting for the Sunrise','nightclub'),
        ),
        array(
            'value'  =>  'Wallpoet',
            'label'  =>  esc_html__('Wallpoet','nightclub'),
        ),
        array(
            'value'  =>  'Walter Turncoat',
            'label'  =>  esc_html__('Walter Turncoat','nightclub'),
        ),
        array(
            'value'  =>  'Warnes',
            'label'  =>  esc_html__('Warnes','nightclub'),
        ),
        array(
            'value'  =>  'Wellfleet',
            'label'  =>  esc_html__('Wellfleet','nightclub'),
        ),
        array(
            'value'  =>  'Wendy One',
            'label'  =>  esc_html__('Wendy One','nightclub'),
        ),
        array(
            'value'  =>  'Wire One',
            'label'  =>  esc_html__('Wire One','nightclub'),
        ),
        array(
            'value'  =>  'Yanone Kaffeesatz',
            'label'  =>  esc_html__('Yanone Kaffeesatz','nightclub'),
        ),
        array(
            'value'  =>  'Yellowtail',
            'label'  =>  esc_html__('Yellowtail','nightclub'),
        ),
        array(
            'value'  =>  'Yeseva One',
            'label'  =>  esc_html__('Yeseva One','nightclub'),
        ),
        array(
            'value'  =>  'Yesteryear',
            'label'  =>  esc_html__('Yesteryear','nightclub'),
        ),
        array(
            'value'  =>  'Zeyada',
            'label'  =>  esc_html__('Zeyada','nightclub'),
        ),

    );
    $nightclub_font_option_style =   array(
        array(
            'value'       => '100',
            'label'       => '100 Thin',
            'src'         => ''
        ),
        array(
            'value'       => '100italic',
            'label'       => '100 Thin Italic',
            'src'         => ''
        ),
        array(
            'value'       => '200',
            'label'       => '200 Extra-Light',
            'src'         => ''
        ),
        array(
            'value'       => '200italic',
            'label'       => '200 Extra-Light Italic',
            'src'         => ''
        ),
        array(
            'value'       => '300',
            'label'       => '300 Light',
            'src'         => ''
        ),
        array(
            'value'       => '300italic',
            'label'       => '300 Light Italic',
            'src'         => ''
        ),
        array(
            'value'       => '400',
            'label'       => '400 Regular',
            'src'         => ''
        ),
        array(
            'value'       => '400italic',
            'label'       => '400 Regular Italic',
            'src'         => ''
        ),
        array(
            'value'       => '500',
            'label'       => '500 Medium',
            'src'         => ''
        ),
        array(
            'value'       => '500italic',
            'label'       => '500 Medium Italic',
            'src'         => ''
        ),
        array(
            'value'       => '600',
            'label'       => '600 Semi-Bold',
            'src'         => ''
        ),
        array(
            'value'       => '600italic',
            'label'       => '600 Semi-Bold Italic',
            'src'         => ''
        ),
        array(
            'value'       => '700',
            'label'       => '700 Bold',
            'src'         => ''
        ),
        array(
            'value'       => '700italic',
            'label'       => '700 Bold Italic',
            'src'         => ''
        ),
        array(
            'value'       => '800',
            'label'       => '800 Extra-Bold',
            'src'         => ''
        ),
        array(
            'value'       => '800italic',
            'label'       => '800 Extra-Bold Italic',
            'src'         => ''
        ),
        array(
            'value'       => '900',
            'label'       => '900 Black',
            'src'         => ''
        ),
        array(
            'value'       => '900italic',
            'label'       => '900 Black Italic',
            'src'         => ''
        ),
    );

    /**
     * Custom settings array that will eventually be
     * passes to the OptionTree Settings API Class.
     */
    $custom_settings = array(
        'contextual_help' => array(
            'content' => array(
                array(
                    'id'      => 'general_help',
                    'title'   => 'General',
                    'content' => '<p>Help content goes here!</p>'
                ),
            ),
            'sidebar' => '<p>Sidebar content goes here!</p>'
        ),
        'sections'        => array(
            array(
                'id'    =>  'TzGlobalOption',
                'title' =>  esc_html__('General Options','maniva-meetup'),
            ),
            array(
                'id'    => 'logo',
                'title' => esc_html__('Logo & Favicon','maniva-meetup'),
            ),
            array(
                'id'    => 'headertop_option',
                'title' => esc_html__('Header Top Options','maniva-meetup' ),
            ),
            array(
                'id'    => 'breadcrumb',
                'title' => esc_html__('Option Breadcrumb','maniva-meetup'),
            ),
            array(
                'id'    => 'social_network',
                'title' => esc_html__('Social Network','maniva-meetup'),
            ),
            array(
                'id'    =>  'TzSyle',
                'title' =>  esc_html__('Font Option','maniva-meetup'),
            ),
            array(
                'id'    =>  'TZFamily',
                'title' =>  esc_html__('Family','maniva-meetup'),
            ),
            array(
                'id'    =>  'CustomFamily',
                'title' =>  esc_html__('Custom','maniva-meetup'),
            ),
            array(
                'id'    =>  'TzCustomCss',
                'title' =>  esc_html__('Custom Css','maniva-meetup'),
            ),
            array(
                'id'    =>  'TZThemecolor',
                'title' =>  esc_html__('Theme Color', 'maniva-meetup'),
            ),
            array(
                'id'    =>  'TZBackground',
                'title' =>  esc_html__('Background','maniva-meetup'),
            ),
            array(
                'id'    =>  'TZBlog',
                'title' =>  esc_html__('Blog Option','maniva-meetup'),
            ),
            array(
                'id'    =>  'TZSingleBlog',
                'title' =>  esc_html__('Single Blog','maniva-meetup'),
            ),
            array(
                'id'    =>  'TZShop',
                'title' =>  esc_html__('Shop option','maniva-meetup'),
            ),
            array(
                'id'    =>  'TZShopDetail',
                'title' =>  __('Shop Detail Option','maniva-meetup'),
            ),
            array(
                'id'    =>  'TZEventCalendar',
                'title' =>  __('Event Calendar','maniva-meetup'),
            ),
            array(
                'id'    => '404',
                'title' => esc_html__('404 Page','maniva-meetup'),
            ),
            array(
                'id'    => 'copyright',
                'title' => esc_html__('Copyright','maniva-meetup'),
            ),
            array(
                'id'    => 'archive_product_multi',
                'title' => esc_html__('Multi Column Sidebar Archive Product','maniva-meetup'),
            ),
            array(
                'id'    => 'footer_multi',
                'title' => esc_html__('Footer Multi Column Options','maniva-meetup'),
            ),
            array(
                'id'    => 'footer_multi_shop',
                'title' => esc_html__('Footer Multi Column Shop','maniva-meetup'),
            ),

        ),

        'settings'        => array(

            /* Start TzGlobalOption */
            array(
                'label'     => esc_html__('Loading','maniva-meetup'),
                'id'        => 'maniva-meetup' . '_loading',
                'type'      => 'on-off',
                'desc'      => esc_html__('On/Off site loading','maniva-meetup'),
                'std'       => 'off',
                'section'   => 'TzGlobalOption',
            ),
            array(
                'label'     => esc_html__('Type loading','maniva-meetup'),
                'id'        => 'maniva-meetup' . '_typeloading',
                'type'      => 'select',
                'desc'      => esc_html__('Select one','maniva-meetup'),
                'std'       => '',
                'section'   => 'TzGlobalOption',
                'choices'   =>  array(
                    array(
                        'value' =>  '0',
                        'label' =>  esc_html__('Effect 1', 'maniva-meetup' ),
                    ),
                    array(
                        'value' =>  '1',
                        'label' =>  esc_html__('Effect 2', 'maniva-meetup' ),
                    ),
                     array(
                         'value' =>  '2',
                         'label' =>  esc_html__('Effect 3 (like facebook loading)', 'maniva-meetup' ),
                     ),
                    array(
                        'value' =>  '3',
                        'label' =>  esc_html__('Effect 4', 'maniva-meetup' ),
                    ),
                    array(
                        'value' =>  '4',
                        'label' =>  esc_html__('Effect 5', 'maniva-meetup' ),
                    ),
                ),
            ),
            array(
                'label'     => esc_html__('Loading logo','maniva-meetup'),
                'id'        => 'maniva-meetup' . '_logoloading',
                'type'      => 'upload',
                'desc'      => esc_html__('Upload image for logo','maniva-meetup'),
                'std'       => '',
                'section'   => 'TzGlobalOption',
            ),
            array(
                'label'     => esc_html__('Limit excerpt','maniva-meetup'),
                'id'        => 'maniva-meetup' . '_porlimitexcerpt',
                'type'      => 'text',
                'desc'      => esc_html__('Limit text for excerpt','maniva-meetup'),
                'std'       => '',
                'section'   => 'TzGlobalOption',
            ),
            array(
                'id'        =>  'maniva-meetup' . '_tzmaniva_rtl',
                'label'     =>  esc_html__('Right to left', 'maniva-meetup' ),
                'desc'      =>  '',
                'std'       =>  '0',
                'type'      =>  'select',
                'section'   =>  'TzGlobalOption',
                'choices'   =>  array(
                    array(
                        'value' =>  '0',
                        'label' =>  esc_html__('No', 'maniva-meetup' ),
                    ),
                    array(
                        'value' =>  '1',
                        'label' =>  esc_html__('Yes', 'maniva-meetup' ),
                    )
                ),
            ),
            array(
                'id'        =>  'maniva-meetup' . '_ChooseBackTop',
                'label'     =>  esc_html__('Chose Type Back To Top', 'maniva-meetup' ),
                'desc'      =>  '',
                'std'       =>  '',
                'type'      =>  'select',
                'section'   =>  'TzGlobalOption',
                'choices'   =>  array(
                    array(
                        'value' =>  '0',
                        'label' =>  esc_html__('Image', 'maniva-meetup' ),
                    ),
                    array(
                        'value' =>  '1',
                        'label' =>  esc_html__('Font Awesome', 'maniva-meetup' ),
                    )
                ),
            ),
            array(
                'id'        =>  'maniva-meetup' . '_AnimateBackTop',
                'label'     =>  esc_html__('Disable animate effect Back To Top', 'maniva-meetup' ),
                'desc'      =>  '',
                'std'       =>  '0',
                'type'      =>  'select',
                'section'   =>  'TzGlobalOption',
                'choices'   =>  array(
                    array(
                        'value' =>  '0',
                        'label' =>  esc_html__('Enabled', 'maniva-meetup' ),
                    ),
                    array(
                        'value' =>  '1',
                        'label' =>  esc_html__('Disabled', 'maniva-meetup' ),
                    )
                ),
            ),
            array(
                'id'        =>  'maniva-meetup' . '_PositionBackTop',
                'label'     =>  esc_html__('Position Back To Top', 'maniva-meetup' ),
                'desc'      =>  '',
                'std'       =>  '0',
                'type'      =>  'select',
                'section'   =>  'TzGlobalOption',
                'choices'   =>  array(
                    array(
                        'value' =>  '0',
                        'label' =>  esc_html__('Right', 'maniva-meetup' ),
                    ),
                    array(
                        'value' =>  '1',
                        'label' =>  esc_html__('Left', 'maniva-meetup' ),
                    )
                ),
            ),
            array(
                'id'          => 'maniva-meetup'. '_on_off_back_top',
                'label'       => esc_html__( 'On/Off Back Top', 'maniva-meetup' ),
                'std'         => 'on',
                'type'        => 'on-off',
                'section'     => 'TzGlobalOption',
            ),
            array(
                'id'        => 'maniva-meetup'. '_scrolling_back_top',
                'label'     => esc_html__( 'It Appears When Scrolling', 'maniva-meetup' ),
                'std'       => 'off',
                'type'      => 'on-off',
                'desc'      =>  'Page Shop Default Only Use Scrolling',
                'section'   => 'TzGlobalOption',
            ),
            array(
                'id'        => 'maniva-meetup' . '_image_backTop',
                'label'     => esc_html__('Upload Image Back To Top','maniva-meetup'),
                'desc'      => esc_html__('Please choose an image  back to top.','maniva-meetup'),
                'std'       => $image_backtop_default,
                'type'      => 'upload',
                'section'   => 'TzGlobalOption',
            ),
            array(
                'label'     => esc_html__('Font Awesome','maniva-meetup'),
                'id'        => 'maniva-meetup' . '_FontAwesomeBackTop',
                'type'      => 'text',
                'desc'      => esc_html__('EX:fa-angle-up, link <a href="http://fontawesome.io/icons/" target="_blank">Font Awesome</a>','maniva-meetup'),
                'std'       => 'fa-angle-up',
                'section'   => 'TzGlobalOption',
            ),
            array(
                'id'        => 'maniva-meetup' . '_ChooseFooterType',
                'label'     => esc_html__('Choose Footer Type','maniva-meetup'),
                'type'      => 'select',
                'desc'      => esc_html__('Use of page category, single, archive, author, tag, search, 404, event','maniva-meetup'),
                'std'       => '1',
                'section'   => 'TzGlobalOption',
                'choices'   =>  array(
                    array(
                        'value' =>  '1',
                        'label' =>  esc_html__('Type 1 - One Column Center','maniva-meetup'),
                    ),
                    array(
                        'value' =>  '2',
                        'label' =>  esc_html__('Type 2 - Multi column','maniva-meetup'),
                    ),
                    array(
                        'value' =>  '3',
                        'label' =>  esc_html__('Type 3 - One Column Center & Multi column','maniva-meetup'),
                    ),
                ),

            ),
            /* End Global Option */

            /* Start Logo & Favicon */
            array(
                'id'        => 'maniva-meetup' . '_logotype',
                'label'     => esc_html__('Logo Type','maniva-meetup'),
                'desc'      => esc_html__('select type for logo text or image','maniva-meetup'),
                'std'       => '1',
                'type'      => 'select',
                'section'   => 'logo',
                'rows'      => '',
                'post_type' => '',
                'taxonomy'  => '',
                'class'     => '',
                'choices'   => array(
                    array(
                        'value' => '1',
                        'label' => esc_html__('Logo image','maniva-meetup'),
                    ),
                    array(
                        'value' => '0',
                        'label' => esc_html__('Logo text','maniva-meetup'),
                    ),
                ),
            ),
            array(
                'id'        => 'maniva-meetup' . '_logoText',
                'label'     => esc_html__('Logo Name','maniva-meetup'),
                'desc'      => '',
                'std'       => 'logo',
                'type'      => 'text',
                'section'   => 'logo',
            ),
            array(
                'id'        => 'maniva-meetup' . '_logoText',
                'label'     => esc_html__('Logo Text','maniva-meetup'),
                'desc'      => esc_html__('logo name for your website','maniva-meetup'),
                'std'       => 'Maniva',
                'type'      => 'text',
                'section'   => 'logo',
            ),
            array(
                'id'        =>  'maniva-meetup'. '_logoTextcolor',
                'label'     => esc_html__('Color logo','maniva-meetup'),
                'desc'      => esc_html__('logo text color','maniva-meetup'),
                'std'       => '',
                'type'      => 'colorpicker',
                'section'   => 'logo',
            ),
            array(
                'id'        => 'maniva-meetup' . '_logo',
                'label'     => esc_html__('Upload Logo','maniva-meetup'),
                'desc'      => esc_html__('Please choose an image  to use for logo.','maniva-meetup'),
                'std'       => $logo_default,
                'type'      => 'upload',
                'section'   => 'logo',
            ),
            array(
                'id'        => 'maniva-meetup' . '_favicon_onoff',
                'label'     => esc_html__('Enable Favicon','maniva-meetup'),
                'desc'      => esc_html__('Show or hide Favicon','maniva-meetup'),
                'std'       => 'no',
                'type'      => 'select',
                'section'   => 'logo',
                'rows'      => '',
                'post_type' => '',
                'taxonomy'  => '',
                'class'     => '',
                'choices'   => array(
                    array(
                        'value' => 'yes',
                        'label' => esc_html__('Yes','maniva-meetup'),
                        'src'   => ''
                    ),
                    array(
                        'value' => 'no',
                        'label' => esc_html__('No','maniva-meetup'),
                        'src'   => ''
                    )
                ),
            ),
            array(
                'id'        => 'maniva-meetup' . '_favicon',
                'label'     => esc_html__('Upload Favicon Icon','maniva-meetup'),
                'desc'      => esc_html__('Please choose an image  to use for favicon.','maniva-meetup'),
                'std'       => '',
                'type'      => 'upload',
                'section'   => 'logo',
            ),
            /* End Logo & Favicon */

            /* Start header top option */
            array(
                'id'        => 'maniva-meetup'. 'type-menu',
                'label'     => esc_html__( 'Type menu', 'maniva-meetup' ),
                'std'       => '1',
                'type'      => 'select',
                'section'   => 'headertop_option',
                'choices'   =>  array(
                    array(
                        'value' =>  1,
                        'label' =>  esc_html__('Type 1', 'maniva-meetup' ),
                    ),
                    array(
                        'value' =>  2,
                        'label' =>  esc_html__('Type 2', 'maniva-meetup' ),
                    ),
                ),
            ),
            array(
                'id'        => 'maniva-meetup'. 'position-on-desktop',
                'label'     => esc_html__( 'Type position of header on desktop', 'maniva-meetup' ),
                'std'       => '1',
                'type'      => 'select',
                'section'   => 'headertop_option',
                'choices'   =>  array(
                    array(
                        'value' =>  1,
                        'label' =>  esc_html__('Relative', 'maniva-meetup' ),
                    ),
                    array(
                        'value' =>  2,
                        'label' =>  esc_html__('Fixed', 'maniva-meetup' ),
                    ),
                ),
            ),
            array(
                'id'        => 'maniva-meetup'. 'position-mobile',
                'label'     => esc_html__( 'Type position of header on mobile', 'maniva-meetup' ),
                'std'       => '1',
                'type'      => 'select',
                'section'   => 'headertop_option',
                'choices'   =>  array(
                    array(
                        'value' =>  1,
                        'label' =>  esc_html__('Relative', 'maniva-meetup' ),
                    ),
                    array(
                        'value' =>  2,
                        'label' =>  esc_html__('Fixed', 'maniva-meetup' ),
                    ),
                ),
            ),
            array(
                'id'          => 'maniva-meetup'. 'on-off-header-top',
                'label'       => esc_html__( 'Show Or Hide Header Top', 'maniva-meetup' ),
                'desc'        => 'Option User Of Header Top',
                'std'         => '1',
                'type'        => 'select',
                'section'     => 'headertop_option',
                'choices'   =>  array(
                    array(
                        'value' =>  1,
                        'label' =>  esc_html__('Show Header Top', 'maniva-meetup' ),
                    ),
                    array(
                        'value' =>  2,
                        'label' =>  esc_html__('Only Show Email And Phone', 'maniva-meetup' ),
                    ),
                    array(
                        'value' =>  3,
                        'label' =>  esc_html__('Only Show Social Network', 'maniva-meetup' ),
                    ),
                    array(
                        'value' =>  4,
                        'label' =>  esc_html__('Hide Header Top', 'maniva-meetup' ),
                    ),
                ),
            ),
            array(
                'id'          => 'maniva-meetup'. 'position-header-top',
                'label'       => esc_html__( 'Position Top Header', 'maniva-meetup' ),
                'std'         => '1',
                'type'        => 'select',
                'section'     => 'headertop_option',
                'choices'   =>  array(
                    array(
                        'value' =>  1,
                        'label' =>  esc_html__('Left', 'maniva-meetup' ),
                    ),
                    array(
                        'value' =>  2,
                        'label' =>  esc_html__('Center', 'maniva-meetup' ),
                    ),
                    array(
                        'value' =>  3,
                        'label' =>  esc_html__('Right', 'maniva-meetup' ),
                    ),
                ),
            ),
            array(
                'id'          => 'maniva-meetup'. 'on-off-button-search',
                'label'       => esc_html__( 'On/Off Button Search Top', 'maniva-meetup' ),
                'std'         => 'on',
                'type'        => 'on-off',
                'section'     => 'headertop_option',
            ),
            array(
                'id'        =>  'maniva-meetup'. 'TzHeaderTopOption',
                'label'     => esc_html__('Header Top Option','maniva-meetup' ),
                'desc'      =>  esc_html__('Config mail support end phone number.Note: only Menu Type 2','maniva-meetup' ),
                'std'       =>  '',
                'type'      => 'textblock-titled',
                'section'   => 'headertop_option',
                'rows'      => '5',
                'post_type' => '',
                'taxonomy'  => '',
                'class'     => ''
            ),
            array(
                'id'        => 'maniva-meetup' . '_TzHeaderTopMail',
                'label'     => esc_html__('Mail','maniva-meetup' ),
                'desc'      => esc_html__('Mail support','maniva-meetup' ),
                'std'       => 'info@maniva.com',
                'type'      => 'text',
                'section'   => 'headertop_option',
            ),
            array(
                'id'        => 'maniva-meetup' . '_TzHeaderTopPhone',
                'label'     => esc_html__('Phone','maniva-meetup' ),
                'desc'      => '',
                'std'       => '+44 40 8873432',
                'type'      => 'text',
                'section'   => 'headertop_option',
            ),
            /* End header top option */

            /* Start Breadcrumb */
            array(
                'id'        =>  'maniva-meetup'. 'tzBreadcrumb',
                'label'     => esc_html__('Breadcrumb Option page blog','maniva-meetup'),
                'desc'      =>  '',
                'std'       =>  '',
                'type'      => 'textblock-titled',
                'section'   => 'breadcrumb',
                'rows'      => '5',
                'post_type' => '',
                'taxonomy'  => '',
                'class'     => ''
            ),
            array(
                'id'          => 'maniva-meetup'. 'tzBreadcrumb_on_off',
                'label'       => esc_html__( 'On/Off Breadcrumb', 'maniva-meetup' ),
                'std'         => 'on',
                'type'        => 'on-off',
                'section'     => 'breadcrumb',
            ),
            array(
                'id'        =>  'maniva-meetup'. '_tzBreadcrumb_blogColor',
                'label'     => esc_html__('Background Breadcrumb','maniva-meetup'),
                'desc'      => esc_html__('Background Breadcrumb','maniva-meetup'),
                'std'       => '',
                'type'      => 'colorpicker',
                'section'   => 'breadcrumb',
            ),
            array(
                'id'        =>  'maniva-meetup'. '_tzBreadcrumb_blogTextColor',
                'label'     => esc_html__('Color Text Breadcrumb','maniva-meetup'),
                'desc'      => esc_html__('Color Text Breadcrumb','maniva-meetup'),
                'std'       => '',
                'type'      => 'colorpicker',
                'section'   => 'breadcrumb',
            ),
            /* End Breadcrumb */

            /* Start social_network */
            array(
                'id'        => 'maniva-meetup' . '_social_network_facebook',
                'label'     => esc_html__('Facebook','maniva-meetup'),
                'desc'      => esc_html__('Place the link you want and Facebook icon will appear. To remove it, just leave it blank.','maniva-meetup'),
                'std'       => '',
                'type'      => 'text',
                'section'   => 'social_network',
                'rows'      => '',
                'post_type' => '',
                'taxonomy'  => '',
                'class'     => ''
            ),
            array(
                'id'        => 'maniva-meetup' . '_social_network_twitter',
                'label'     => esc_html__('Twitter','maniva-meetup'),
                'desc'      => esc_html__('Place the link you want and Twitter icon will appear. To remove it, just leave it blank.','maniva-meetup'),
                'std'       => '',
                'type'      => 'text',
                'section'   => 'social_network',
                'rows'      => '',
                'post_type' => '',
                'taxonomy'  => '',
                'class'     => ''
            ),
            array(
                'id'        => 'maniva-meetup' . '_social_network_flickr',
                'label'     => esc_html__('Flickr','maniva-meetup'),
                'desc'      => esc_html__('Place the link you want and Flickr icon will appear. To remove it, just leave it blank.','maniva-meetup'),
                'std'       => '',
                'type'      => 'text',
                'section'   => 'social_network',
                'rows'      => '',
                'post_type' => '',
                'taxonomy'  => '',
                'class'     => ''
            ),
            array(
                'id'        => 'maniva-meetup' . '_social_network_behance',
                'label'     => esc_html__('Behance','maniva-meetup'),
                'desc'      => esc_html__('Place the link you want and Behance icon will appear. To remove it, just leave it blank.','maniva-meetup'),
                'std'       => '',
                'type'      => 'text',
                'section'   => 'social_network',
                'rows'      => '',
                'post_type' => '',
                'taxonomy'  => '',
                'class'     => ''
            ),
            array(
                'id'        => 'maniva-meetup' . '_social_network_instagram',
                'label'     => esc_html__('Instagram','maniva-meetup'),
                'desc'      => esc_html__('Place the link you want and Instagram icon will appear. To remove it, just leave it blank.','maniva-meetup'),
                'std'       => '',
                'type'      => 'text',
                'section'   => 'social_network',
                'rows'      => '',
                'post_type' => '',
                'taxonomy'  => '',
                'class'     => ''
            ),
            array(
                'id'        => 'maniva-meetup' . '_social_network_digg',
                'label'     => esc_html__('Digg','maniva-meetup'),
                'desc'      => esc_html__('Place the link you want and Digg icon will appear. To remove it, just leave it blank.','maniva-meetup'),
                'std'       => '',
                'type'      => 'text',
                'section'   => 'social_network',
                'rows'      => '',
                'post_type' => '',
                'taxonomy'  => '',
                'class'     => ''
            ),
            array(
                'id'        => 'maniva-meetup' . '_social_network_dribbble',
                'label'     => esc_html__('Dribbble','maniva-meetup'),
                'desc'      => esc_html__('Place the link you want and Dribbble icon will appear. To remove it, just leave it blank.','maniva-meetup'),
                'std'       => '',
                'type'      => 'text',
                'section'   => 'social_network',
                'rows'      => '',
                'post_type' => '',
                'taxonomy'  => '',
                'class'     => ''
            ),
            array(
                'id'        => 'maniva-meetup' . '_social_network_linkedin',
                'label'     => esc_html__('Linkedin','maniva-meetup'),
                'desc'      => esc_html__('Place the link you want and Linkedin icon will appear. To remove it, just leave it blank.','maniva-meetup'),
                'std'       => '',
                'type'      => 'text',
                'section'   => 'social_network',
                'rows'      => '',
                'post_type' => '',
                'taxonomy'  => '',
                'class'     => ''

            ),
            array(
                'id'        => 'maniva-meetup' . '_social_network_dropbox',
                'label'     => esc_html__('Dropbox','maniva-meetup'),
                'desc'      => esc_html__('Place the link you want and Dropbox icon will appear. To remove it, just leave it blank.','maniva-meetup'),
                'std'       => '',
                'type'      => 'text',
                'section'   => 'social_network',
                'rows'      => '',
                'post_type' => '',
                'taxonomy'  => '',
                'class'     => ''
            ),
            array(
                'id'        => 'maniva-meetup' . '_social_network_google-plus',
                'label'     => esc_html__('Google Plus','maniva-meetup'),
                'desc'      => esc_html__('Place the link you want and Google Plus icon will appear. To remove it, just leave it blank.','maniva-meetup'),
                'std'       => '',
                'type'      => 'text',
                'section'   => 'social_network',
                'rows'      => '',
                'post_type' => '',
                'taxonomy'  => '',
                'class'     => ''
            ),
            array(
                'id'        => 'maniva-meetup' . '_social_network_foursquare',
                'label'     => esc_html__('Foursquare','maniva-meetup'),
                'desc'      => esc_html__('Place the link you want and Foursquare icon will appear. To remove it, just leave it blank.','maniva-meetup'),
                'std'       => '',
                'type'      => 'text',
                'section'   => 'social_network',
                'rows'      => '',
                'post_type' => '',
                'taxonomy'  => '',
                'class'     => ''
            ),
            array(
                'id'        => 'maniva-meetup' . '_social_network_pinterest',
                'label'     => esc_html__('Pinterest','maniva-meetup'),
                'desc'      => esc_html__('Place the link you want and Pinterest icon will appear. To remove it, just leave it blank.','maniva-meetup'),
                'std'       => '',
                'type'      => 'text',
                'section'   => 'social_network',
                'rows'      => '',
                'post_type' => '',
                'taxonomy'  => '',
                'class'     => ''
            ),
            array(
                'id'        => 'maniva-meetup' . '_social_network_myspace',
                'label'     => esc_html__('My space','maniva-meetup'),
                'desc'      => esc_html__('Place the link you want and My space icon will appear. To remove it, just leave it blank.','maniva-meetup'),
                'std'       => '',
                'type'      => 'text',
                'section'   => 'social_network',
                'rows'      => '',
                'post_type' => '',
                'taxonomy'  => '',
                'class'     => ''
            ),
            array(
                'id'        => 'maniva-meetup' . '_social_network_skype',
                'label'     => esc_html__('Skype','maniva-meetup'),
                'desc'      => esc_html__('Place the link you want and Skype icon will appear. To remove it, just leave it blank.','maniva-meetup'),
                'std'       => '',
                'type'      => 'text',
                'section'   => 'social_network',
                'rows'      => '',
                'post_type' => '',
                'taxonomy'  => '',
                'class'     => ''
            ),
            array(
                'id'        => 'maniva-meetup' . '_social_network_tumblr',
                'label'     => esc_html__('Tumblr','maniva-meetup'),
                'desc'      => esc_html__('Place the link you want and Tumblr icon will appear. To remove it, just leave it blank.','maniva-meetup'),
                'std'       => '',
                'type'      => 'text',
                'section'   => 'social_network',
                'rows'      => '',
                'post_type' => '',
                'taxonomy'  => '',
                'class'     => ''
            ),
            array(
                'id'        => 'maniva-meetup' . '_social_network_vimeo',
                'label'     => esc_html__('Vimeo','maniva-meetup'),
                'desc'      => esc_html__('Place the link you want and Vimeo icon will appear. To remove it, just leave it blank.','maniva-meetup'),
                'std'       => '',
                'type'      => 'text',
                'section'   => 'social_network',
                'rows'      => '',
                'post_type' => '',
                'taxonomy'  => '',
                'class'     => ''
            ),
            array(
                'id'        => 'maniva-meetup' . '_social_network_youtube',
                'label'     => esc_html__('Youtube','maniva-meetup'),
                'desc'      => esc_html__('Place the link you want and Youtube icon will appear. To remove it, just leave it blank.','maniva-meetup'),
                'std'       => '',
                'type'      => 'text',
                'section'   => 'social_network',
                'rows'      => '',
                'post_type' => '',
                'taxonomy'  => '',
                'class'     => ''
            ),
            /* End social_network */

            /* Start Font Family */
            array(
                'id' =>  'maniva-meetup'.'_TzSyle',
                'label'     => esc_html__('StyleConfig','maniva-meetup'),
                'desc'      => esc_html__('Config for Content, Main Menu, Big Headings, Small Headings, custom style','maniva-meetup'),
                'std'       => '',
                'type'      => 'textblock-titled',
                'section'   => 'TzSyle',
                'rows'      => '',
                'post_type' => '',
                'taxonomy'  => '',
                'class'     => ''
            ),
            array(
                'id'        =>  'maniva-meetup'. '-select-font-theme',
                'label'     =>  esc_html__('Choose Use Fonts','maniva-meetup'),
                'desc'      =>  esc_html__('option font type','maniva-meetup'),
                'std'       =>  1,
                'type'      =>  'select',
                'section'   =>  'TZFamily',
                'rows'      =>  '',
                'post_type' =>  '',
                'taxonomy'  =>  '',
                'class'     =>  '',
                'choices'   =>  array(
                    array(
                        'value' =>  1,
                        'label' =>  'Default',
                    ),
                    array(
                        'value' =>  2,
                        'label' =>  'Font Family',
                    ),
                    array(
                        'value' =>  3,
                        'label' =>  'Custom Fonts vs CSS',
                    ),

                ),
            ),
            array(
                'id'        =>  'maniva-meetup'.'-font-text-family',
                'label'     => esc_html__('Font Family','maniva-meetup'),
                'std'       => '',
                'type'      => 'textblock-titled',
                'section'   => 'TZFamily',
                'rows'      => '',
                'post_type' => '',
                'taxonomy'  => '',
                'class'     => 'tz-text-font-family'
            ),
            array(
                'id'       =>   'maniva-meetup'.'-font-content',
                'label'    =>   esc_html__('Content','maniva-meetup'),
                'desc'     =>   esc_html__('All theme texts except headings and menu','maniva-meetup'),
                'type'     =>   'select',
                'std'       =>  'Raleway',
                'section'  =>   'TZFamily',
                'class'    =>   'TzFontStylet',
                'choices'  =>   $maniva_meetup_font_option,
            ),
            array(
                'id'       =>   'maniva-meetup'.'-font-menu',
                'label'    =>   esc_html__('Main Menu','maniva-meetup'),
                'desc'     =>   esc_html__('Header menu','maniva-meetup'),
                'type'     =>   'select',
                'std'       =>  'Raleway',
                'section'  =>   'TZFamily',
                'class'    =>   'TzFontStylet',
                'choices'  =>   $maniva_meetup_font_option,
            ),
            array(
                'id'       =>   'maniva-meetup'.'-font-headings',
                'label'    =>   esc_html__('Big Headings','maniva-meetup'),
                'desc'     =>   esc_html__('H1, H2, H3 & H4 headings','maniva-meetup'),
                'type'     =>   'select',
                'std'       =>  'Raleway',
                'section'  =>   'TZFamily',
                'class'    =>   'TzFontStylet',
                'choices'  =>   $maniva_meetup_font_option,
            ),
            array(
                'id'       =>   'maniva-meetup'.'-font-headings-small',
                'label'    =>   esc_html__('Small Headings','maniva-meetup'),
                'desc'     =>   esc_html__('H5 & H6 headings','maniva-meetup'),
                'type'     =>   'select',
                'std'       =>  'Raleway',
                'section'  =>   'TZFamily',
                'class'    =>   'TzFontStylet',
                'choices'  =>   $maniva_meetup_font_option,
            ),
            array(
                'id'        =>  'maniva-meetup'.'-font-info-google',
                'label'     => esc_html__('Google Fonts','maniva-meetup'),
                'std'       => '',
                'type'      => 'textblock-titled',
                'section'   => 'TZFamily',
                'rows'      => '',
                'post_type' => '',
                'taxonomy'  => '',
                'class'     => 'tz-text-font-family'
            ),
            array(
                'id'          => 'maniva-meetup'.'-font-weight',
                'label'       => esc_html__( 'Google Fonts Style & Weight', 'theme-text-domain' ),
                'desc'        => esc_html__( 'Some of the fonts in the Google Fonts Directory support multiple styles. For a complete list of available font subsets please see <a href="http://www.google.com/webfonts" target="_blank">Google Web Fonts</a>.', 'maniva-meetup' ),
                'std'         => '',
                'type'        => 'checkbox',
                'section'     => 'TZFamily',
                'rows'        => '',
                'post_type'   => '',
                'taxonomy'    => '',
                'class'       => 'tz-check-font-weight',
                'operator'    => 'and',
                'choices'     => $nightclub_font_option_style
            ),
            array(
                'label'     => esc_html__('Google Fonts Subset','maniva-meetup'),
                'id'        => 'maniva-meetup' . '-font-subset',
                'type'      => 'text',
                'desc'      =>   esc_html__('Specify which subsets should be downloaded. Multiple subsets should be separated with coma (,)','maniva-meetup'),
                'class'     => '',
                'section'   => 'TZFamily',
            ),
            array(
                'id'        =>  'maniva-meetup'.'_CustomFamily',
                'label'     => esc_html__('Custom','maniva-meetup'),
                'std'       => '',
                'type'      => 'textblock-titled',
                'section'   => 'CustomFamily',
                'class'     => 'tz-text-font-family'
            ),
            array(
                'label'     => esc_html__('Font | Name (Please use only letters or spaces, eg. Patua One)','maniva-meetup'),
                'id'        => 'maniva-meetup' . '-font-custom',
                'type'      => 'text',
                'desc'     =>   esc_html__('Name for Custom Font uploaded below. Font will show on fonts list after click the Save Changes button.','maniva-meetup'),
                'class'     => '',
                'section'   => 'CustomFamily',
            ),
            array(
                'id'        => 'maniva-meetup' . '-font-custom-woff',
                'label'     => esc_html__('Font | .woff','maniva-meetup'),
                'desc'      => '',
                'std'       => '',
                'type'      => 'upload',
                'section'   => 'CustomFamily',
                'class'     => 'tz-font-custom-family'
            ),
            array(
                'id'        => 'maniva-meetup' . '-font-custom-ttf',
                'label'     => esc_html__('Font | .ttf','maniva-meetup'),
                'desc'      => '',
                'std'       => '',
                'type'      => 'upload',
                'section'   => 'CustomFamily',
                'class'     => 'tz-font-custom-family'
            ),
            array(
                'id'        => 'maniva-meetup' . 'font-custom-svg',
                'label'     => esc_html__('Font | .svg','maniva-meetup'),
                'desc'      => '',
                'std'       => '',
                'type'      => 'upload',
                'section'   => 'CustomFamily',
                'class'     => 'tz-font-custom-family'
            ),
            array(
                'id'        => 'maniva-meetup' . 'font-custom-eot',
                'label'     => esc_html__('Font | .eot','maniva-meetup'),
                'desc'      => '',
                'std'       => '',
                'type'      => 'upload',
                'section'   => 'CustomFamily',
                'class'     => 'tz-font-custom-family'
            ),

            array(
                'label'     => esc_html__('Font 2 | Name (Please use only letters or spaces, eg. Patua One)','maniva-meetup'),
                'id'        => 'maniva-meetup' . '-font-custom2',
                'type'      => 'text',
                'desc'     =>   esc_html__('Name for Custom Font uploaded below. Font will show on fonts list after click the Save Changes button.','maniva-meetup'),
                'class'     => 'tz-font-custom-family',
                'section'   => 'CustomFamily',
            ),
            array(
                'id'        => 'maniva-meetup' . '-font-custom2-woff',
                'label'     => esc_html__('Font 2 | .woff','maniva-meetup'),
                'desc'      => '',
                'std'       => '',
                'type'      => 'upload',
                'section'   => 'CustomFamily',
                'class'     => 'tz-font-custom-family'
            ),
            array(
                'id'        => 'maniva-meetup' . '-font-custom2-ttf',
                'label'     => esc_html__('Font 2 | .ttf','maniva-meetup'),
                'desc'      => '',
                'std'       => '',
                'type'      => 'upload',
                'section'   => 'CustomFamily',
                'class'     => 'tz-font-custom-family'
            ),
            array(
                'id'        => 'maniva-meetup' . 'font-custom2-svg',
                'label'     => esc_html__('Font 2 | .svg','maniva-meetup'),
                'desc'      => '',
                'std'       => '',
                'type'      => 'upload',
                'section'   => 'CustomFamily',
                'class'     => 'tz-font-custom-family'
            ),
            array(
                'id'        => 'maniva-meetup' . 'font-custom2-eot',
                'label'     => esc_html__('Font 2 | .eot','maniva-meetup'),
                'desc'      => '',
                'std'       => '',
                'type'      => 'upload',
                'section'   => 'CustomFamily',
                'class'     => 'tz-font-custom-family'
            ),
            /* End Font Family */

            /* Start custom css */
            array(
                'id'        =>  'maniva-meetup'. '_TzCustomCss',
                'label'     =>  esc_html__('Code CSS','maniva-meetup'),
                'desc'      =>  esc_html__('Paste your custom CSS, the !important tag may be needed.','maniva-meetup'),
                'std'       =>  '',
                'type'      => 'css',
                'section'   => 'TzCustomCss',
            ),
            /* End custom css */

            /* Start Theme color */
            array(
                'id'        =>  'maniva-meetup'.'_TZTypecolor',
                'label'     =>  esc_html__('Config Color Them', 'maniva-meetup'),
                'desc'      =>  '',
                'std'       =>  '0',
                'type'      =>  'select',
                'section'   =>  'TZThemecolor',
                'choices'   =>  array(
                    array(
                        'value' =>  '0',
                        'label' =>  esc_html__('Default Color', 'maniva-meetup'),
                    ),
                    array(
                        'value' =>  '1',
                        'label' =>  esc_html__('Custom Color', 'maniva-meetup'),
                    )
                ),
            ),
            array(
                'id'        =>  'maniva-meetup'.'_TZThemecolor',
                'label'     => esc_html__('Choose color','maniva-meetup'),
                'desc'      =>  '',
                'sdt'       =>  '',
                'type'      =>  'radio-image',
                'section'   =>  'TZThemecolor',
                'class'     =>  '',
                'choices'   =>  array(
                    array(
                        'value' =>  '',
                        'label' =>  '',
                        'src'   =>  get_template_directory_uri().'/extension/assets/images/Bright_red.jpg'
                    ),
                    array(
                        'value' =>  '#fece15',
                        'label' =>  '',
                        'src'   =>  get_template_directory_uri().'/extension/assets/images/yellow.jpg'
                    ),
                    array(
                        'value' =>  '#e45914',
                        'label' =>  '',
                        'src'   =>  get_template_directory_uri().'/extension/assets/images/orange.jpg'
                    ),
                    array(
                        'value' =>  '#e80f60',
                        'label' =>  '',
                        'src'   =>  get_template_directory_uri().'/extension/assets/images/pink.jpg'
                    ),
                    array(
                        'value' =>  '#53c5a9',
                        'label' =>  '',
                        'src'   =>  get_template_directory_uri().'/extension/assets/images/green.jpg'
                    ),
                    array(
                        'value' =>  '#57a6f0',
                        'label' =>  '',
                        'src'   =>  get_template_directory_uri().'/extension/assets/images/blue.jpg'
                    ),
                    array(
                        'value' =>  '#77be32',
                        'label' =>  '',
                        'src'   =>  get_template_directory_uri().'/extension/assets/images/limegreen.jpg'
                    ),
                    array(
                        'value' =>  '#d786fe',
                        'label' =>  '',
                        'src'   =>  get_template_directory_uri().'/extension/assets/images/violet.jpg'
                    ),
                    array(
                        'value' =>  '#9b59b6',
                        'label' =>  '',
                        'src'   =>  get_template_directory_uri().'/extension/assets/images/blueviolet.jpg'
                    ),
                    array(
                        'value' =>  '#c0392b',
                        'label' =>  '',
                        'src'   =>  get_template_directory_uri().'/extension/assets/images/firebrick.jpg'
                    ),
                    array(
                        'value' =>  '#4cddf3',
                        'label' =>  '',
                        'src'   =>  get_template_directory_uri().'/extension/assets/images/skyblue.jpg'
                    ),
                    array(
                        'value' =>  '#f2333a',
                        'label' =>  '',
                        'src'   =>  get_template_directory_uri().'/extension/assets/images/red.jpg'
                    ),
                    array(
                        'value' =>  '#3333f2',
                        'label' =>  '',
                        'src'   =>  get_template_directory_uri().'/extension/assets/images/darkblue.jpg'
                    ),
                )
            ),
            array(
                'id'        =>  'maniva-meetup'. '_TZThemecustom',
                'label'     => esc_html__('Choose Color', 'maniva-meetup'),
                'std'       => '',
                'type'      => 'colorpicker-opacity',
                'section'   => 'TZThemecolor',
            ),
            array(
                'id'        =>  'maniva-meetup'. '_TZCustomColorFooter',
                'label'     => esc_html__('Background Color Footer', 'maniva-meetup'),
                'std'       => '',
                'type'      => 'colorpicker-opacity',
                'section'   => 'TZThemecolor',
            ),
            array(
                'id'        =>  'maniva-meetup'. '_TZCustomColorFooterBottom',
                'label'     =>  esc_html__('Background Color Footer Bottom', 'maniva-meetup'),
                'std'       =>  '',
                'desc'      =>  'Use Of Footer Multi Column Options',
                'type'      =>  'colorpicker-opacity',
                'section'   =>  'TZThemecolor',
            ),
            array(
                'id'        =>  'maniva-meetup'. '_TZCustomColorFooterShop',
                'label'     =>  esc_html__('Background Color Footer Shop', 'maniva-meetup'),
                'std'       =>  '',
                'desc'      =>  'Use Of Footer Multi Column Shop',
                'type'      =>  'colorpicker-opacity',
                'section'   =>  'TZThemecolor',
            ),
            /* End Theme color */

            /* Background */
            array(
                'id'        => 'cbackground',
                'label'     => esc_html__('Background','maniva-meetup'),
                'desc'      => esc_html__('Default background for Post, Page, Portfolio, Category, Archive, Seach page.','maniva-meetup'),
                'std'       => '',
                'type'      => 'textblock-titled',
                'section'   => 'TZBackground',
                'rows'      => '',
                'post_type' => '',
                'taxonomy'  => '',
                'class'     => ''
            ),
            array(
                'id'        => 'maniva-meetup' . '_background_type',
                'label'     => esc_html__('Background Type','maniva-meetup'),
                'desc'      => esc_html__('You can choose the background you want between our pre-provided pattern and your custom image.','maniva-meetup'),
                'std'       => 'none',
                'type'      => 'select',
                'section'   => 'TZBackground',
                'rows'      => '',
                'post_type' => '',
                'taxonomy'  => '',
                'class'     => '',
                'choices'   => array(
                    array(
                        'value' => 'none',
                        'label' => esc_html__('Default','maniva-meetup'),
                    ),
                    array(
                        'value' => 'pattern',
                        'label' => esc_html__('Pattern','maniva-meetup'),
                    ),
                    array(
                        'value' => 'single_image',
                        'label' => esc_html__('Single image','maniva-meetup'),
                    ),
                ),
            ),
            array(
                'id'        =>  'maniva-meetup'. '_TZBackgroundColor',
                'label'     => esc_html__('Color code','maniva-meetup'),
                'desc'      => esc_html__('Background color code','maniva-meetup'),
                'std'       => '',
                'type'      => 'colorpicker',
                'section'   => 'TZBackground',
            ),
            array(
                'id'        => 'maniva-meetup' . '_background_pattern',
                'label'     => esc_html__('Choose Pattern','maniva-meetup'),
                'desc'      => '',
                'std'       => '',
                'type'      => 'radio-image',
                'section'   => 'TZBackground',
                'rows'      => '',
                'post_type' => '',
                'taxonomy'  => '',
                'class'     => 'background_pattern',
                'choices'   => $patterns
            ),
            array(
                'id'        => 'maniva-meetup' . '_background_single_image',
                'label'     => esc_html__('Single Image Background','maniva-meetup'),
                'desc'      => '',
                'std'       => '',
                'type'      => 'upload',
                'section'   => 'TZBackground',
                'rows'      => '',
                'post_type' => '',
                'taxonomy'  => '',
                'class'     => ''
            ),
            /* End Background */

            /* Start Blog */
            array(
                'id'        => 'maniva-meetup' . '_TZBlogSidebar',
                'label'     => esc_html__('Show Sidebar','maniva-meetup'),
                'type'      => 'select',
                'desc'      => '',
                'std'       => 'show',
                'section'   => 'TZBlog',
                'choices'   =>  array(
                    array(
                        'value' =>  'show',
                        'label' =>  esc_html__('Show','maniva-meetup'),
                    ),
                    array(
                        'value' =>  'hide',
                        'label' =>  esc_html__('Hide','maniva-meetup'),
                    ),
                ),

            ),
            array(
                'id'        => 'maniva-meetup' . 'blog_single_slideshows_show',
                'label'     => esc_html__('Show hide slider client','maniva-meetup'),
                'type'      => 'select',
                'desc'      => '',
                'std'       => 'hide',
                'section'   => 'TZBlog',
                'choices'   =>  array(
                    array(
                        'value' =>  'hide',
                        'label' =>  esc_html__('Hide','maniva-meetup'),
                    ),
                    array(
                        'value' =>  'show',
                        'label' =>  esc_html__('Show','maniva-meetup'),
                    ),
                ),
            ),
            array(
                'id'        => 'maniva-meetup' . '_background_image_slider_client',
                'label'     => esc_html__('Image Background slider client','maniva-meetup'),
                'desc'      => esc_html__('Only use page category and single', 'maniva-meetup'),
                'std'       => '',
                'type'      => 'upload',
                'section'   => 'TZBlog',
                'rows'      => '',
                'post_type' => '',
                'taxonomy'  => '',
                'class'     => ''
            ),
            array(
                'id'          => 'maniva-meetup' . '_item_slideshows_client',
                'label'       => esc_html__( 'Number item slider', 'maniva-meetup' ),
                'desc'        => esc_html__( 'Only use page category and single', 'maniva-meetup' ),
                'type'        => 'numeric-slider',
                'std'         => 5,
                'section'     => 'TZBlog',
                'min_max_step'=> '1,100',
            ),
            array(
                'label'     => esc_html__('Slides Client','maniva-meetup'),
                'id'        => 'maniva-meetup' . '_blog_single_slideshows',
                'type'      => 'list-item',
                'desc'      =>  esc_html__('Only use page category and single', 'maniva-meetup'),
                'section'   => 'TZBlog',
                'class'     => '',
                'settings'  => array(
                    array(
                        'id'        => 'maniva-meetup' . '_blog_single_slideshow_item',
                        'label'     => esc_html__('Image','maniva-meetup'),
                        'type'      => 'upload',
                        'class'     => 'portfolio-slideshow-item',
                    ),
                    array(
                        'label'     => esc_html__('Link image client','maniva-meetup'),
                        'id'        => 'maniva-meetup' . '_blog_single_slideshow_item_link',
                        'type'      => 'text',
                        'class'     => '',
                    ),
                )
            ),
            /* End Blog */

            /* Start Single Blog */
            array(
                'id'        => 'TZBlog',
                'label'     => esc_html__('Option Single Blog','maniva-meetup'),
                'desc'      => esc_html__('Option Single Blog','maniva-meetup'),
                'std'       => '',
                'type'      => 'textblock-titled',
                'section'   => 'TZSingleBlog',
                'rows'      => '',
                'post_type' => '',
                'taxonomy'  => '',
                'class'     => ''
            ),
            array(
                'id'        => 'maniva-meetup' . '_TZSingleBlogSidebar',
                'label'     => esc_html__('Sidebar Option','maniva-meetup'),
                'type'      => 'select',
                'desc'      => '',
                'std'       => 'show',
                'section'   => 'TZSingleBlog',
                'choices'   =>  array(
                    array(
                        'value' =>  'show',
                        'label' =>  esc_html__('Show','maniva-meetup'),
                    ),
                    array(
                        'value' =>  'hide',
                        'label' =>  esc_html__('Hide','maniva-meetup'),
                    ),
                ),

            ),
            array(
                'id'          => 'maniva-meetup'. '_TZSingleBlogImage',
                'label'       => esc_html__( 'On/Off Image Post', 'maniva-meetup' ),
                'std'         => 'on',
                'type'        => 'on-off',
                'section'     => 'TZSingleBlog',
            ),
            array(
                'id'          => 'maniva-meetup'. '_TZSingleBlogSliderImage',
                'label'       => esc_html__( 'On/Off Image Post Type Slider', 'maniva-meetup' ),
                'std'         => 'on',
                'type'        => 'on-off',
                'section'     => 'TZSingleBlog',
            ),
            array(
                'id'          => 'maniva-meetup'. '_TZSingleBlogVideo',
                'label'       => esc_html__( 'On/Off Video Post', 'maniva-meetup' ),
                'std'         => 'on',
                'type'        => 'on-off',
                'section'     => 'TZSingleBlog',
            ),
            array(
                'id'          => 'maniva-meetup'. '_TZSingleBlogAudio',
                'label'       => esc_html__( 'On/Off Audio Post', 'maniva-meetup' ),
                'std'         => 'on',
                'type'        => 'on-off',
                'section'     => 'TZSingleBlog',
            ),
            array(
                'id'          => 'maniva-meetup'. 'tzAvata_blog_on_off',
                'label'       => esc_html__( 'On/Off Avatar', 'maniva-meetup' ),
                'std'         => 'off',
                'type'        => 'on-off',
                'section'     => 'TZSingleBlog',
            ),
            array(
                'id'          => 'maniva-meetup'. '_TzSingleAvatarSocial',
                'label'       => esc_html__( 'On/Off Avatar Social', 'maniva-meetup' ),
                'std'         => 'off',
                'type'        => 'on-off',
                'section'     => 'TZSingleBlog',
            ),
            array(
                'id'          => 'maniva-meetup'. '_TzSingleNumberComment',
                'label'       => esc_html__( 'On/Off Number Comment', 'maniva-meetup' ),
                'std'         => 'on',
                'type'        => 'on-off',
                'section'     => 'TZSingleBlog',
            ),
            array(
                'id'          => 'maniva-meetup'. '_TzSingleBtnShare',
                'label'       => esc_html__( 'On/Off Button Share', 'maniva-meetup' ),
                'std'         => 'on',
                'type'        => 'on-off',
                'section'     => 'TZSingleBlog',
            ),
            array(
                'id'          => 'maniva-meetup'. '_TzSingleTag',
                'label'       => esc_html__( 'On/Off Tag', 'maniva-meetup' ),
                'std'         => 'on',
                'type'        => 'on-off',
                'section'     => 'TZSingleBlog',
            ),
            array(
                'id'          => 'maniva-meetup'. '_TzSingleAuthor',
                'label'       => esc_html__( 'On/Off Author', 'maniva-meetup' ),
                'std'         => 'on',
                'type'        => 'on-off',
                'section'     => 'TZSingleBlog',
            ),
            array(
                'id'          => 'maniva-meetup'. 'tzRelated_Post_on_off',
                'label'       => esc_html__( 'On/Off Related Posts', 'maniva-meetup' ),
                'std'         => 'off',
                'type'        => 'on-off',
                'section'     => 'TZSingleBlog',
            ),
            array(
                'id'          => 'maniva-meetup'. '_TzSingleCommentForm',
                'label'       => esc_html__( 'On/Off Comment Form', 'maniva-meetup' ),
                'std'         => 'on',
                'type'        => 'on-off',
                'section'     => 'TZSingleBlog',
            ),
            array(
                'id'          => 'maniva-meetup'. '_TzSinglePreNext',
                'label'       => esc_html__( 'On/Off Previous-Next', 'maniva-meetup' ),
                'std'         => 'on',
                'type'        => 'on-off',
                'section'     => 'TZSingleBlog',
            ),
            /* End Single Blog */

            /* Start Shop */
            array(
                'id'          => 'maniva-meetup'. 'breadcrumb-shop-on-off',
                'label'       => esc_html__( 'On/Off Breadcrumb Shop', 'maniva-meetup' ),
                'std'         => 'on',
                'type'        => 'on-off',
                'section'     => 'TZShop',
            ),
            array(
                'id'        => 'maniva-meetup' . '_bk_breadcrumb_shop',
                'label'     => esc_html__('Upload Background Image Breadcrumb Shop','maniva-meetup'),
                'desc'      => esc_html__('Please choose an image  to use for Breadcrumb Shop.','maniva-meetup'),
                'std'       => '',
                'type'      => 'upload',
                'section'   => 'TZShop',
            ),
            array(
                'id'        => 'maniva-meetup' . '_event_on_breadcrumb_shop',
                'label'     => esc_html__('Event on Breadcrumb shop','maniva-meetup'),
                'desc'      => '',
                'std'       => '<p>Could not you decide? <a target="_blank" href="http://www.templaza.com/">Contact Us,</a> we help your styling FREE...</p>',
                'type'      => 'textarea',
                'section'   => 'TZShop',
                'rows'      => '5',
                'post_type' => '',
                'taxonomy'  => '',
                'class'     => ''
            ),
            array(
                'id'        =>  'maniva-meetup' . '_TZLimitProductPageShop',
                'label'     => __('Limit product page shop','maniva-meetup'),
                'desc'      => __('Limit product page shop','maniva-meetup'),
                'std'       => '12',
                'type'      => 'text',
                'section'   => 'TZShop',
                'rows'      => '',
                'post_type' => '',
                'taxonomy'  => '',
                'class'     => ''
            ),
            array(
                'id'        =>  'maniva-meetup'. '_column_item_product',
                'label'     =>  esc_html__('Cloumn Item Product','maniva-meetup'),
                'section'   =>  'TZShop',
                'std'       =>  '4',
                'type'      =>  'select',
                'choices'   =>  array(
                    array(
                        'value' =>  '4',
                        'label' =>  '4',
                    ),
                    array(
                        'value' =>  '3',
                        'label' =>  '3',
                    ),
                    array(
                        'value' =>  '2',
                        'label' =>  '2',
                    ),
                    array(
                        'value' =>  '1',
                        'label' =>  '1',
                    ),
                )
            ),
            array(
                'id'          => 'maniva-meetup'. 'recently-viewed-on-off',
                'label'       => esc_html__( 'On/Off Recently Viewed', 'maniva-meetup' ),
                'std'         => 'on',
                'type'        => 'on-off',
                'section'     => 'TZShop',
            ),
            array(
                'id'        =>  'maniva-meetup' . '_TZTextRecentlyViewed',
                'label'     => __('Text recently viewed','maniva-meetup'),
                'desc'      => __('Text recently viewed ','maniva-meetup'),
                'std'       => 'recently viewed',
                'type'      => 'text',
                'section'   => 'TZShop',
                'rows'      => '',
                'post_type' => '',
                'taxonomy'  => '',
                'class'     => ''
            ),
            array(
                'id'        =>  'maniva-meetup' . '_TZLimitProductRecentlyViewed',
                'label'     => __('Limit product recently viewed','maniva-meetup'),
                'desc'      => __('Limit product recently viewed ','maniva-meetup'),
                'std'       => '8',
                'type'      => 'text',
                'section'   => 'TZShop',
                'rows'      => '',
                'post_type' => '',
                'taxonomy'  => '',
                'class'     => ''
            ),
            array(
                'id'        =>  'maniva-meetup'. '_column_item_recently_viewed',
                'label'     =>  esc_html__('Cloumn Item Recently Viewed','maniva-meetup'),
                'section'   =>  'TZShop',
                'std'       =>  '4',
                'type'      =>  'select',
                'choices'   =>  array(
                    array(
                        'value' =>  '4',
                        'label' =>  '4',
                    ),
                    array(
                        'value' =>  '3',
                        'label' =>  '3',
                    ),
                    array(
                        'value' =>  '2',
                        'label' =>  '2',
                    ),
                    array(
                        'value' =>  '1',
                        'label' =>  '1',
                    ),
                )
            ),
            /* End Shop */

            /* Start Shop Detail */
            array(
                'id'        => 'maniva-meetup' . '_TZShopDetailSidebar',
                'label'     => esc_html__('Show Sidebar','maniva-meetup'),
                'type'      => 'select',
                'desc'      => '',
                'std'       => 'hide',
                'section'   => 'TZShopDetail',
                'choices'   =>  array(
                    array(
                        'value' =>  'hide',
                        'label' =>  esc_html__('Hide','maniva-meetup'),
                    ),
                    array(
                        'value' =>  'show',
                        'label' =>  esc_html__('Show','maniva-meetup'),
                    ),
                ),

            ),
            array(
                'id'          => 'maniva-meetup'. 'related-products-on-off',
                'label'       => esc_html__( 'On/Off Related Products', 'maniva-meetup' ),
                'std'         => 'on',
                'type'        => 'on-off',
                'section'     => 'TZShopDetail',
            ),
            array(
                'id'          => 'maniva-meetup'. 'best-seller-products-on-off',
                'label'       => esc_html__( 'On/Off Best Seller Products', 'maniva-meetup' ),
                'std'         => 'on',
                'type'        => 'on-off',
                'section'     => 'TZShopDetail',
            ),
            array(
                'id'          => 'maniva-meetup'. 'recent-view-product-on-off',
                'label'       => esc_html__( 'On/Off Recent View Product ', 'maniva-meetup' ),
                'std'         => 'on',
                'type'        => 'on-off',
                'section'     => 'TZShopDetail',
            ),
            /* End Shop Detail */

            /* Start Event Calendar */
            array(
                'id'        => 'maniva-meetup' . '_logo_event_calendar',
                'label'     => esc_html__('Upload Logo','maniva-meetup'),
                'desc'      => esc_html__('logo use for header event calendar.','maniva-meetup'),
                'std'       => $logo_default_event,
                'type'      => 'upload',
                'section'   => 'TZEventCalendar',
            ),
            array(
                'id'        => 'maniva-meetup' . 'bk-img_header',
                'label'     => esc_html__('Background Image Header Of Event Calendar','maniva-meetup'),
                'desc'      => esc_html__('Size background img 1920x99','maniva-meetup'),
                'std'       => '',
                'type'      => 'upload',
                'section'   => 'TZEventCalendar',
            ),
            /* End Event Calendar */

            /* Start 404 */
            array(
                'id'        => 'maniva-meetup' . '_404_page_content',
                'label'     => esc_html__('404 Page Content','maniva-meetup'),
                'desc'      => '',
                'std'       => '<p>The page or journal you are looking for cannot be found</p>',
                'type'      => 'textarea',
                'section'   => '404',
                'rows'      => '15',
                'post_type' => '',
                'taxonomy'  => '',
                'class'     => ''
            ),
            /* End 404 */

            /* Start Copyright */
            array(
                'id'        => 'maniva-meetup' . '_copyright',
                'label'     => esc_html__('Copyright','maniva-meetup'),
                'desc'      => '',
                'std'       => '<p>Copyright &copy; <a target="_blank" href="http://www.templaza.com/">Templaza</a></p>',
                'type'      => 'textarea',
                'section'   => 'copyright',
                'rows'      => '15',
                'post_type' => '',
                'taxonomy'  => '',
                'class'     => ''
            ),
            /* End Copyright */

            /* archive product multi */
            array(
                'id'          => 'maniva-meetup'. 'on-off-sidebar-archive-product',
                'label'       => esc_html__( 'On/Off Sidebar Archive Product', 'maniva-meetup' ),
                'std'         => 'on',
                'type'        => 'on-off',
                'section'     => 'archive_product_multi',
            ),
            array(
                'id'        =>  'maniva-meetup-sidebar-archive-product',
                'label'     => esc_html__('Sidebar Archive Product Multi Column Option','maniva-meetup'),
                'desc'      => esc_html__('Config column number of Sidebar Archive Product.','maniva-meetup'),
                'std'       => '',
                'type'      => 'textblock-titled',
                'section'   => 'archive_product_multi',
                'rows'      => '5',
                'post_type' => '',
                'taxonomy'  => '',
                'class'     => ''
            ),
            array(
                'id'        =>  'maniva-meetup-archive-product-image',
                'label'     => '',
                'desc'      =>  '',
                'sdt'       =>  '',
                'type'      =>  'radio-image',
                'section'   =>  'archive_product_multi',
                'class'     =>  '',
                'choices'   =>  array(
                    array(
                        'value' =>  1,
                        'label' =>  '',
                        'src'   =>  get_template_directory_uri().'/extension/assets/images/footer1.jpg'
                    ),
                    array(
                        'value' =>  2,
                        'label' =>  '',
                        'src'   =>  get_template_directory_uri().'/extension/assets/images/footer2.jpg'
                    ),
                    array(
                        'value' =>  3,
                        'label' =>  '',
                        'src'   =>  get_template_directory_uri().'/extension/assets/images/footer3.jpg'
                    ),
                    array(
                        'value' =>  4,
                        'label' =>  '',
                        'src'   =>  get_template_directory_uri().'/extension/assets/images/footer4.jpg'
                    ),
                )
            ),
            array(
                'label'     =>  esc_html__('Number of Sidebar Archive Product Multi Columns.','maniva-meetup'),
                'id'        =>  'maniva-meetup-archive-product-columns',
                'desc'      =>  esc_html__('Select the number of columns to display in the archive product.','maniva-meetup'),
                'section'   =>  'archive_product_multi',
                'std'       =>  '4',
                'type'      =>  'select',
                'choices'   =>  array(
                    array(
                        'value' =>  '4',
                        'label' =>  '4',
                    ),
                    array(
                        'value' =>  '3',
                        'label' =>  '3'
                    ),
                    array(
                        'value' =>  '2',
                        'label' =>  '2'
                    ),
                    array(
                        'value' =>  '1',
                        'label' =>  '1'
                    ),
                )
            ),
            array(
                'id'      =>    'maniva-meetup-archive-product-width1',
                'label'   =>    esc_html__('Archive product width 1','maniva-meetup'),
                'desc'    =>    esc_html__('config width for sidebar archive product','maniva-meetup'),
                'section' =>    'archive_product_multi',
                'std'     =>    '3',
                'type'    =>    'select',
                'choices' =>    array(
                    array(
                        'value' =>  '1',
                        'label' =>  '1',
                    ),
                    array(
                        'value' =>  '2',
                        'label' =>  '2',
                    ),
                    array(
                        'value' =>  '3',
                        'label' =>  '3',
                    ),
                    array(
                        'value' =>  '4',
                        'label' =>  '4',
                    ),
                    array(
                        'value' =>  '5',
                        'label' =>  '5',
                    ),
                    array(
                        'value' =>  '6',
                        'label' =>  '6',
                    ),
                    array(
                        'value' =>  '7',
                        'label' =>  '7',
                    ),
                    array(
                        'value' =>  '8',
                        'label' =>  '8',
                    ),
                    array(
                        'value' =>  '9',
                        'label' =>  '9',
                    ),
                    array(
                        'value' =>  '10',
                        'label' =>  '10',
                    ),
                    array(
                        'value' =>  '11',
                        'label' =>  '11',
                    ),
                    array(
                        'value' =>  '12',
                        'label' =>  '12',
                    ),
                )
            ),
            array(
                'id'      =>    'maniva-meetup-archive-product-width2',
                'label'   =>    esc_html__('Archive product width 2','maniva-meetup'),
                'desc'    =>    esc_html__('config width for sidebar archive product','maniva-meetup'),
                'section' =>    'archive_product_multi',
                'std'     =>    '3',
                'type'    =>    'select',
                'choices' =>    array(
                    array(
                        'value' =>  '1',
                        'label' =>  '1',
                    ),
                    array(
                        'value' =>  '2',
                        'label' =>  '2',
                    ),
                    array(
                        'value' =>  '3',
                        'label' =>  '3',
                    ),
                    array(
                        'value' =>  '4',
                        'label' =>  '4',
                    ),
                    array(
                        'value' =>  '5',
                        'label' =>  '5',
                    ),
                    array(
                        'value' =>  '6',
                        'label' =>  '6',
                    ),
                    array(
                        'value' =>  '7',
                        'label' =>  '7',
                    ),
                    array(
                        'value' =>  '8',
                        'label' =>  '8',
                    ),
                    array(
                        'value' =>  '9',
                        'label' =>  '9',
                    ),
                    array(
                        'value' =>  '10',
                        'label' =>  '10',
                    ),
                    array(
                        'value' =>  '11',
                        'label' =>  '11',
                    ),
                    array(
                        'value' =>  '12',
                        'label' =>  '12',
                    ),
                )
            ),
            array(
                'id'      =>    'maniva-meetup-archive-product-width3',
                'label'   =>    esc_html__('Archive product width 3','maniva-meetup'),
                'desc'    =>    esc_html__('config width for sidebar archive product','maniva-meetup'),
                'section' =>    'archive_product_multi',
                'std'     =>    '3',
                'type'    =>    'select',
                'choices' =>    array(
                    array(
                        'value' =>  '1',
                        'label' =>  '1',
                    ),
                    array(
                        'value' =>  '2',
                        'label' =>  '2',
                    ),
                    array(
                        'value' =>  '3',
                        'label' =>  '3',
                    ),
                    array(
                        'value' =>  '4',
                        'label' =>  '4',
                    ),
                    array(
                        'value' =>  '5',
                        'label' =>  '5',
                    ),
                    array(
                        'value' =>  '6',
                        'label' =>  '6',
                    ),
                    array(
                        'value' =>  '7',
                        'label' =>  '7',
                    ),
                    array(
                        'value' =>  '8',
                        'label' =>  '8',
                    ),
                    array(
                        'value' =>  '9',
                        'label' =>  '9',
                    ),
                    array(
                        'value' =>  '10',
                        'label' =>  '10',
                    ),
                    array(
                        'value' =>  '11',
                        'label' =>  '11',
                    ),
                    array(
                        'value' =>  '12',
                        'label' =>  '12',
                    ),
                )
            ),
            array(
                'id'      =>    'maniva-meetup-archive-product-width4',
                'label'   =>    esc_html__('Archive product width 4','maniva-meetup'),
                'desc'    =>    esc_html__('config width for sidebar archive product','maniva-meetup'),
                'section' =>    'archive_product_multi',
                'std'     =>    '3',
                'type'    =>    'select',
                'choices' =>    array(
                    array(
                        'value' =>  '1',
                        'label' =>  '1',
                    ),
                    array(
                        'value' =>  '2',
                        'label' =>  '2',
                    ),
                    array(
                        'value' =>  '3',
                        'label' =>  '3',
                    ),
                    array(
                        'value' =>  '4',
                        'label' =>  '4',
                    ),
                    array(
                        'value' =>  '5',
                        'label' =>  '5',
                    ),
                    array(
                        'value' =>  '6',
                        'label' =>  '6',
                    ),
                    array(
                        'value' =>  '7',
                        'label' =>  '7',
                    ),
                    array(
                        'value' =>  '8',
                        'label' =>  '8',
                    ),
                    array(
                        'value' =>  '9',
                        'label' =>  '9',
                    ),
                    array(
                        'value' =>  '10',
                        'label' =>  '10',
                    ),
                    array(
                        'value' =>  '11',
                        'label' =>  '11',
                    ),
                    array(
                        'value' =>  '12',
                        'label' =>  '12',
                    ),
                )
            ),
            /* archive product multi */

            /* Start footer multi */
            array(
                'id'        =>  'maniva-meetup'. 'footer_description',
                'label'     => esc_html__('Footer Multi Column Option','maniva-meetup'),
                'desc'      => esc_html__('Config column number of footer multi column.','maniva-meetup'),
                'std'       => '',
                'type'      => 'textblock-titled',
                'section'   => 'footer_multi',
                'rows'      => '5',
                'post_type' => '',
                'taxonomy'  => '',
                'class'     => ''
            ),
            array(
                'id'        =>  'maniva-meetup'.'footer_image',
                'label'     => '',
                'desc'      =>  '',
                'sdt'       =>  '',
                'type'      =>  'radio-image',
                'section'   =>  'footer_multi',
                'class'     =>  '',
                'choices'   =>  array(
                    array(
                        'value' =>  'footer1',
                        'label' =>  '',
                        'src'   =>  get_template_directory_uri().'/extension/assets/images/footer1.jpg'
                    ),
                    array(
                        'value' =>  'footer2',
                        'label' =>  '',
                        'src'   =>  get_template_directory_uri().'/extension/assets/images/footer2.jpg'
                    ),
                    array(
                        'value' =>  'footer3',
                        'label' =>  '',
                        'src'   =>  get_template_directory_uri().'/extension/assets/images/footer3.jpg'
                    ),
                    array(
                        'value' =>  'footer4',
                        'label' =>  '',
                        'src'   =>  get_template_directory_uri().'/extension/assets/images/footer4.jpg'
                    ),
                )
            ),
            array(
                'label'     =>  esc_html__('Number of Footer Multi Columns.','maniva-meetup'),
                'id'        =>  'maniva-meetup'. '_footer_columns',
                'desc'      =>  esc_html__('Select the number of columns to display in the footer.','maniva-meetup'),
                'section'   =>  'footer_multi',
                'std'       =>  '4',
                'type'      =>  'select',
                'choices'   =>  array(
                    array(
                        'value' =>  '4',
                        'label' =>  '4',
                    ),
                    array(
                        'value' =>  '3',
                        'label' =>  '3'
                    ),
                    array(
                        'value' =>  '2',
                        'label' =>  '2'
                    ),
                    array(
                        'value' =>  '1',
                        'label' =>  '1'
                    ),
                )
            ),
            array(
                'id'      =>    'maniva-meetup'. 'footerwidth1',
                'label'   =>    esc_html__('Footer width 1','maniva-meetup'),
                'desc'    =>    esc_html__('config width for footer','maniva-meetup'),
                'section' =>    'footer_multi',
                'std'     =>    '3',
                'type'    =>    'select',
                'choices' =>    array(
                    array(
                        'value' =>  '1',
                        'label' =>  '1',
                    ),
                    array(
                        'value' =>  '2',
                        'label' =>  '2',
                    ),
                    array(
                        'value' =>  '3',
                        'label' =>  '3',
                    ),
                    array(
                        'value' =>  '4',
                        'label' =>  '4',
                    ),
                    array(
                        'value' =>  '5',
                        'label' =>  '5',
                    ),
                    array(
                        'value' =>  '6',
                        'label' =>  '6',
                    ),
                    array(
                        'value' =>  '7',
                        'label' =>  '7',
                    ),
                    array(
                        'value' =>  '8',
                        'label' =>  '8',
                    ),
                    array(
                        'value' =>  '9',
                        'label' =>  '9',
                    ),
                    array(
                        'value' =>  '10',
                        'label' =>  '10',
                    ),
                    array(
                        'value' =>  '11',
                        'label' =>  '11',
                    ),
                    array(
                        'value' =>  '12',
                        'label' =>  '12',
                    ),
                )
            ),
            array(
                'id'      =>    'maniva-meetup'. 'footerwidth2',
                'label'   =>    esc_html__('Footer width 2','maniva-meetup'),
                'desc'    =>    esc_html__('config width for footer','maniva-meetup'),
                'section' =>    'footer_multi',
                'std'     =>    '3',
                'type'    =>    'select',
                'choices' =>    array(
                    array(
                        'value' =>  '1',
                        'label' =>  '1',
                    ),
                    array(
                        'value' =>  '2',
                        'label' =>  '2',
                    ),
                    array(
                        'value' =>  '3',
                        'label' =>  '3',
                    ),
                    array(
                        'value' =>  '4',
                        'label' =>  '4',
                    ),
                    array(
                        'value' =>  '5',
                        'label' =>  '5',
                    ),
                    array(
                        'value' =>  '6',
                        'label' =>  '6',
                    ),
                    array(
                        'value' =>  '7',
                        'label' =>  '7',
                    ),
                    array(
                        'value' =>  '8',
                        'label' =>  '8',
                    ),
                    array(
                        'value' =>  '9',
                        'label' =>  '9',
                    ),
                    array(
                        'value' =>  '10',
                        'label' =>  '10',
                    ),
                    array(
                        'value' =>  '11',
                        'label' =>  '11',
                    ),
                    array(
                        'value' =>  '12',
                        'label' =>  '12',
                    ),
                )
            ),
            array(
                'id'      =>    'maniva-meetup'. 'footerwidth3',
                'label'   =>    esc_html__('Footer width 3','maniva-meetup'),
                'desc'    =>    esc_html__('config width for footer','maniva-meetup'),
                'section' =>    'footer_multi',
                'std'     =>    '3',
                'type'    =>    'select',
                'choices' =>    array(
                    array(
                        'value' =>  '1',
                        'label' =>  '1',
                    ),
                    array(
                        'value' =>  '2',
                        'label' =>  '2',
                    ),
                    array(
                        'value' =>  '3',
                        'label' =>  '3',
                    ),
                    array(
                        'value' =>  '4',
                        'label' =>  '4',
                    ),
                    array(
                        'value' =>  '5',
                        'label' =>  '5',
                    ),
                    array(
                        'value' =>  '6',
                        'label' =>  '6',
                    ),
                    array(
                        'value' =>  '7',
                        'label' =>  '7',
                    ),
                    array(
                        'value' =>  '8',
                        'label' =>  '8',
                    ),
                    array(
                        'value' =>  '9',
                        'label' =>  '9',
                    ),
                    array(
                        'value' =>  '10',
                        'label' =>  '10',
                    ),
                    array(
                        'value' =>  '11',
                        'label' =>  '11',
                    ),
                    array(
                        'value' =>  '12',
                        'label' =>  '12',
                    ),
                )
            ),
            array(
                'id'      =>    'maniva-meetup'. 'footerwidth4',
                'label'   =>    esc_html__('Footer width 4','maniva-meetup'),
                'desc'    =>    esc_html__('config width for footer','maniva-meetup'),
                'section' =>    'footer_multi',
                'std'     =>    '3',
                'type'    =>    'select',
                'choices' =>    array(
                    array(
                        'value' =>  '1',
                        'label' =>  '1',
                    ),
                    array(
                        'value' =>  '2',
                        'label' =>  '2',
                    ),
                    array(
                        'value' =>  '3',
                        'label' =>  '3',
                    ),
                    array(
                        'value' =>  '4',
                        'label' =>  '4',
                    ),
                    array(
                        'value' =>  '5',
                        'label' =>  '5',
                    ),
                    array(
                        'value' =>  '6',
                        'label' =>  '6',
                    ),
                    array(
                        'value' =>  '7',
                        'label' =>  '7',
                    ),
                    array(
                        'value' =>  '8',
                        'label' =>  '8',
                    ),
                    array(
                        'value' =>  '9',
                        'label' =>  '9',
                    ),
                    array(
                        'value' =>  '10',
                        'label' =>  '10',
                    ),
                    array(
                        'value' =>  '11',
                        'label' =>  '11',
                    ),
                    array(
                        'value' =>  '12',
                        'label' =>  '12',
                    ),
                )
            ),
            /* End footer multi */

            /* Start Footer Multi Shop */
            array(
                'id'        =>  'maniva-meetup'. 'footerShop_description',
                'label'     => esc_html__('Footer Multi Column Shop Option','maniva-meetup'),
                'desc'      => esc_html__('Config column number of footer multi column Shop.','maniva-meetup'),
                'std'       =>  '',
                'type'      => 'textblock-titled',
                'section'   => 'footer_multi_shop',
                'rows'      => '5',
                'post_type' => '',
                'taxonomy'  => '',
                'class'     => ''
            ),
            array(
                'id'        =>  'maniva-meetup'.'footerShop_image',
                'label'     => '',
                'desc'      =>  '',
                'sdt'       =>  '',
                'type'      =>  'radio-image',
                'section'   =>  'footer_multi_shop',
                'class'     =>  '',
                'choices'   =>  array(
                    array(
                        'value' =>  'footer1',
                        'label' =>  '',
                        'src'   =>  get_template_directory_uri().'/extension/assets/images/footer1.jpg'
                    ),
                    array(
                        'value' =>  'footer2',
                        'label' =>  '',
                        'src'   =>  get_template_directory_uri().'/extension/assets/images/footer2.jpg'
                    ),
                    array(
                        'value' =>  'footer3',
                        'label' =>  '',
                        'src'   =>  get_template_directory_uri().'/extension/assets/images/footer3.jpg'
                    ),
                    array(
                        'value' =>  'footer4',
                        'label' =>  '',
                        'src'   =>  get_template_directory_uri().'/extension/assets/images/footer4.jpg'
                    ),
                    array(
                        'value' =>  'footer5',
                        'label' =>  '',
                        'src'   =>  get_template_directory_uri().'/extension/assets/images/footer5.jpg'
                    ),
                )
            ),
            array(
                'label'     =>  esc_html__('Number of Footer Multi Columns Shop.','maniva-meetup'),
                'id'        =>  'maniva-meetup'. '_footerShop_columns',
                'desc'      =>  esc_html__('Select the number of columns to display in the footer.','maniva-meetup'),
                'section'   =>  'footer_multi_shop',
                'std'       =>  '5',
                'type'      =>  'select',
                'choices'   =>  array(
                    array(
                        'value' =>  '5',
                        'label' =>  '5',
                    ),
                    array(
                        'value' =>  '4',
                        'label' =>  '4',
                    ),
                    array(
                        'value' =>  '3',
                        'label' =>  '3',
                    ),
                    array(
                        'value' =>  '2',
                        'label' =>  '2',
                    ),
                    array(
                        'value' =>  '1',
                        'label' =>  '1',
                    ),
                )
            ),
            array(
                'id'      =>    'maniva-meetup'. 'footerwidth1_shop',
                'label'   =>    'Footer width 1',
                'desc'    =>    'config width for footer',
                'section' =>    'footer_multi_shop',
                'std'     =>    '2',
                'type'    =>    'select',
                'choices' =>    array(
                    array(
                        'value' =>  '1',
                        'label' =>  '1',
                    ),
                    array(
                        'value' =>  '2',
                        'label' =>  '2',
                    ),
                    array(
                        'value' =>  '3',
                        'label' =>  '3',
                    ),
                    array(
                        'value' =>  '4',
                        'label' =>  '4',
                    ),
                    array(
                        'value' =>  '5',
                        'label' =>  '5',
                    ),
                    array(
                        'value' =>  '6',
                        'label' =>  '6',
                    ),
                    array(
                        'value' =>  '7',
                        'label' =>  '7',
                    ),
                    array(
                        'value' =>  '8',
                        'label' =>  '8',
                    ),
                    array(
                        'value' =>  '9',
                        'label' =>  '9',
                    ),
                    array(
                        'value' =>  '10',
                        'label' =>  '10',
                    ),
                    array(
                        'value' =>  '11',
                        'label' => '11',
                    ),
                    array(
                        'value' =>  '12',
                        'label' =>  '12',
                    ),
                )
            ),
            array(
                'id'      =>    'maniva-meetup'. 'footerwidth2_shop',
                'label'   =>    'Footer width 2',
                'desc'    =>    'config width for footer',
                'section' =>    'footer_multi_shop',
                'std'     =>    '2',
                'type'    =>    'select',
                'choices' =>    array(
                    array(
                        'value' =>  '1',
                        'label' =>  '1',
                    ),
                    array(
                        'value' =>  '2',
                        'label' =>  '2',
                    ),
                    array(
                        'value' =>  '3',
                        'label' =>  '3',
                    ),
                    array(
                        'value' =>  '4',
                        'label' =>  '4',
                    ),
                    array(
                        'value' =>  '5',
                        'label' =>  '5',
                    ),
                    array(
                        'value' =>  '6',
                        'label' =>  '6',
                    ),
                    array(
                        'value' =>  '7',
                        'label' =>  '7',
                    ),
                    array(
                        'value' =>  '8',
                        'label' =>  '8',
                    ),
                    array(
                        'value' =>  '9',
                        'label' =>  '9',
                    ),
                    array(
                        'value' =>  '10',
                        'label' =>  '10',
                    ),
                    array(
                        'value' =>  '11',
                        'label' => '11',
                    ),
                    array(
                        'value' =>  '12',
                        'label' =>  '12',
                    ),
                )
            ),
            array(
                'id'      =>    'maniva-meetup'. 'footerwidth3_shop',
                'label'   =>    'Footer width 3',
                'desc'    =>    'config width for footer',
                'section' =>    'footer_multi_shop',
                'std'     =>    '2',
                'type'    =>    'select',
                'choices' =>    array(
                    array(
                        'value' =>  '1',
                        'label' =>  '1',
                    ),
                    array(
                        'value' =>  '2',
                        'label' =>  '2',
                    ),
                    array(
                        'value' =>  '3',
                        'label' =>  '3',
                    ),
                    array(
                        'value' =>  '4',
                        'label' =>  '4',
                    ),
                    array(
                        'value' =>  '5',
                        'label' =>  '5',
                    ),
                    array(
                        'value' =>  '6',
                        'label' =>  '6',
                    ),
                    array(
                        'value' =>  '7',
                        'label' =>  '7',
                    ),
                    array(
                        'value' =>  '8',
                        'label' =>  '8',
                    ),
                    array(
                        'value' =>  '9',
                        'label' =>  '9',
                    ),
                    array(
                        'value' =>  '10',
                        'label' =>  '10',
                    ),
                    array(
                        'value' =>  '11',
                        'label' => '11',
                    ),
                    array(
                        'value' =>  '12',
                        'label' =>  '12',
                    ),
                )
            ),
            array(
                'id'      =>    'maniva-meetup'. 'footerwidth4_shop',
                'label'   =>    'Footer width 4',
                'desc'    =>    'config width for footer',
                'section' =>    'footer_multi_shop',
                'std'     =>    '2',
                'type'    =>    'select',
                'choices' =>    array(
                    array(
                        'value' =>  '1',
                        'label' =>  '1',
                    ),
                    array(
                        'value' =>  '2',
                        'label' =>  '2',
                    ),
                    array(
                        'value' =>  '3',
                        'label' =>  '3',
                    ),
                    array(
                        'value' =>  '4',
                        'label' =>  '4',
                    ),
                    array(
                        'value' =>  '5',
                        'label' =>  '5',
                    ),
                    array(
                        'value' =>  '6',
                        'label' =>  '6',
                    ),
                    array(
                        'value' =>  '7',
                        'label' =>  '7',
                    ),
                    array(
                        'value' =>  '8',
                        'label' =>  '8',
                    ),
                    array(
                        'value' =>  '9',
                        'label' =>  '9',
                    ),
                    array(
                        'value' =>  '10',
                        'label' =>  '10',
                    ),
                    array(
                        'value' =>  '11',
                        'label' => '11',
                    ),
                    array(
                        'value' =>  '12',
                        'label' =>  '12',
                    ),
                )
            ),
            array(
                'id'      =>    'maniva-meetup'. 'footerwidth5_shop',
                'label'   =>    'Footer width 5',
                'desc'    =>    'config width for footer',
                'section' =>    'footer_multi_shop',
                'std'     =>    '4',
                'type'    =>    'select',
                'choices' =>    array(
                    array(
                        'value' =>  '1',
                        'label' =>  '1',
                    ),
                    array(
                        'value' =>  '2',
                        'label' =>  '2',
                    ),
                    array(
                        'value' =>  '3',
                        'label' =>  '3',
                    ),
                    array(
                        'value' =>  '4',
                        'label' =>  '4',
                    ),
                    array(
                        'value' =>  '5',
                        'label' =>  '5',
                    ),
                    array(
                        'value' =>  '6',
                        'label' =>  '6',
                    ),
                    array(
                        'value' =>  '7',
                        'label' =>  '7',
                    ),
                    array(
                        'value' =>  '8',
                        'label' =>  '8',
                    ),
                    array(
                        'value' =>  '9',
                        'label' =>  '9',
                    ),
                    array(
                        'value' =>  '10',
                        'label' =>  '10',
                    ),
                    array(
                        'value' =>  '11',
                        'label' => '11',
                    ),
                    array(
                        'value' =>  '12',
                        'label' =>  '12',
                    ),
                )
            ),
            array(
                'label'     => esc_html__('Title Background Footer','maniva-meetup'),
                'id'        => 'maniva-meetup' . '_tzFooter_Titlebg',
                'type'      => 'text',
                'desc'      => '',
                'std'       => '',
                'section'   => 'footer_multi_shop',
            ),
            /* End Footer Multi Shop */

        ),
    );

    /* allow settings to be filtered before saving */

    $custom_settings = apply_filters('option_tree_settings_args', $custom_settings);

    /* settings are not the same update the DB */
    if ($saved_settings !== $custom_settings) {
        update_option('option_tree_settings', $custom_settings);
    }

}


?>
