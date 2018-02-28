<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_25bfe4b3f5f168b85fc9072ac393541be78cad81cb177102fe76bc98e8fa798b extends Twig_Template
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
        $__internal_84fe48cbad90b6e7a645cafe35e20155c4a4ba20f5584c17c83545d21fb90878 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84fe48cbad90b6e7a645cafe35e20155c4a4ba20f5584c17c83545d21fb90878->enter($__internal_84fe48cbad90b6e7a645cafe35e20155c4a4ba20f5584c17c83545d21fb90878_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_549e547b4b8a90624e30c49da65225fb87dd5844cdecf75ef442f365adbcffa8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_549e547b4b8a90624e30c49da65225fb87dd5844cdecf75ef442f365adbcffa8->enter($__internal_549e547b4b8a90624e30c49da65225fb87dd5844cdecf75ef442f365adbcffa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_84fe48cbad90b6e7a645cafe35e20155c4a4ba20f5584c17c83545d21fb90878->leave($__internal_84fe48cbad90b6e7a645cafe35e20155c4a4ba20f5584c17c83545d21fb90878_prof);

        
        $__internal_549e547b4b8a90624e30c49da65225fb87dd5844cdecf75ef442f365adbcffa8->leave($__internal_549e547b4b8a90624e30c49da65225fb87dd5844cdecf75ef442f365adbcffa8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/var/www/html/MyJoob/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
