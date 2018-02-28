<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_f5daa54acecf81f457aa84a13c4bbaa6573bf23ad33e00ce710bbd24672b2f3d extends Twig_Template
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
        $__internal_3565f248bb4b6a1138aaef0a8708027a096abbc773ee22d6228f5ed7ada7f6fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3565f248bb4b6a1138aaef0a8708027a096abbc773ee22d6228f5ed7ada7f6fc->enter($__internal_3565f248bb4b6a1138aaef0a8708027a096abbc773ee22d6228f5ed7ada7f6fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_27b3cb1d745b7a0f11a60998f0f6347fcf15b08d2c1aa1452fa72d9527f402f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27b3cb1d745b7a0f11a60998f0f6347fcf15b08d2c1aa1452fa72d9527f402f0->enter($__internal_27b3cb1d745b7a0f11a60998f0f6347fcf15b08d2c1aa1452fa72d9527f402f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_3565f248bb4b6a1138aaef0a8708027a096abbc773ee22d6228f5ed7ada7f6fc->leave($__internal_3565f248bb4b6a1138aaef0a8708027a096abbc773ee22d6228f5ed7ada7f6fc_prof);

        
        $__internal_27b3cb1d745b7a0f11a60998f0f6347fcf15b08d2c1aa1452fa72d9527f402f0->leave($__internal_27b3cb1d745b7a0f11a60998f0f6347fcf15b08d2c1aa1452fa72d9527f402f0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/var/www/html/MyJoob/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
