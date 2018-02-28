<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_bdee646d2744d5ded2046919e10f68bf1780831f44403bcd7ae198f2fda56ee8 extends Twig_Template
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
        $__internal_0b8dd5824461a4e767212cf2d3ce9d091731ad0c3ef1af2185fcaa74ef5fc7f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b8dd5824461a4e767212cf2d3ce9d091731ad0c3ef1af2185fcaa74ef5fc7f9->enter($__internal_0b8dd5824461a4e767212cf2d3ce9d091731ad0c3ef1af2185fcaa74ef5fc7f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_b1793982ea21d2ac94f77a6770ea3d7491152ae847c52f3a6d2dae3b995f7476 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1793982ea21d2ac94f77a6770ea3d7491152ae847c52f3a6d2dae3b995f7476->enter($__internal_b1793982ea21d2ac94f77a6770ea3d7491152ae847c52f3a6d2dae3b995f7476_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_0b8dd5824461a4e767212cf2d3ce9d091731ad0c3ef1af2185fcaa74ef5fc7f9->leave($__internal_0b8dd5824461a4e767212cf2d3ce9d091731ad0c3ef1af2185fcaa74ef5fc7f9_prof);

        
        $__internal_b1793982ea21d2ac94f77a6770ea3d7491152ae847c52f3a6d2dae3b995f7476->leave($__internal_b1793982ea21d2ac94f77a6770ea3d7491152ae847c52f3a6d2dae3b995f7476_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/var/www/html/MyJoob/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
