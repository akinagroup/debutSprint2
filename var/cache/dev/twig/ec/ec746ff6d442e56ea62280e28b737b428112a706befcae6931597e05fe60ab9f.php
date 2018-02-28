<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_f83a314ea38527bd42d02188ef3b3d945e16ab4199012b4dababa3ee5265c1fd extends Twig_Template
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
        $__internal_06c65563fe9db9eb44b90e13d74283455ef3bb2a8e8c0e446bbdcaf0763998be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06c65563fe9db9eb44b90e13d74283455ef3bb2a8e8c0e446bbdcaf0763998be->enter($__internal_06c65563fe9db9eb44b90e13d74283455ef3bb2a8e8c0e446bbdcaf0763998be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_40e0d67f2aa8815cd6ea365abf542d550a2d36a8eee437186b2736b2638402cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40e0d67f2aa8815cd6ea365abf542d550a2d36a8eee437186b2736b2638402cd->enter($__internal_40e0d67f2aa8815cd6ea365abf542d550a2d36a8eee437186b2736b2638402cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_06c65563fe9db9eb44b90e13d74283455ef3bb2a8e8c0e446bbdcaf0763998be->leave($__internal_06c65563fe9db9eb44b90e13d74283455ef3bb2a8e8c0e446bbdcaf0763998be_prof);

        
        $__internal_40e0d67f2aa8815cd6ea365abf542d550a2d36a8eee437186b2736b2638402cd->leave($__internal_40e0d67f2aa8815cd6ea365abf542d550a2d36a8eee437186b2736b2638402cd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/var/www/html/MyJoob/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
