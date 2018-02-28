<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_b4f6d95002718001fced1e0a901aaaf61b3206cae2e7e02230bbbab8af3d38b3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_69abfc3f01a2f610e9bf405e68d030e1c5e8157705bc4c1ef43d38ce46fcebc7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69abfc3f01a2f610e9bf405e68d030e1c5e8157705bc4c1ef43d38ce46fcebc7->enter($__internal_69abfc3f01a2f610e9bf405e68d030e1c5e8157705bc4c1ef43d38ce46fcebc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_131281c7be8cd83eb804bcd4a5706ab72f0f16872dcd6067e315f44810d02728 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_131281c7be8cd83eb804bcd4a5706ab72f0f16872dcd6067e315f44810d02728->enter($__internal_131281c7be8cd83eb804bcd4a5706ab72f0f16872dcd6067e315f44810d02728_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_69abfc3f01a2f610e9bf405e68d030e1c5e8157705bc4c1ef43d38ce46fcebc7->leave($__internal_69abfc3f01a2f610e9bf405e68d030e1c5e8157705bc4c1ef43d38ce46fcebc7_prof);

        
        $__internal_131281c7be8cd83eb804bcd4a5706ab72f0f16872dcd6067e315f44810d02728->leave($__internal_131281c7be8cd83eb804bcd4a5706ab72f0f16872dcd6067e315f44810d02728_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/var/www/html/MyJoob/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
