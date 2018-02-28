<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_24486137cbe66d6f3db91deb7ed74eb07a5ca68fb99ff1ad687e86355dd59dfc extends Twig_Template
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
        $__internal_80b894ab554d28673e537fe7da2557ee0a98ea537939397fb4b78945706dc181 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80b894ab554d28673e537fe7da2557ee0a98ea537939397fb4b78945706dc181->enter($__internal_80b894ab554d28673e537fe7da2557ee0a98ea537939397fb4b78945706dc181_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_0cf61a299a00eb49ddfe188c5c40ead57af2f8277c7a802e3726d65a1bdd62c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cf61a299a00eb49ddfe188c5c40ead57af2f8277c7a802e3726d65a1bdd62c4->enter($__internal_0cf61a299a00eb49ddfe188c5c40ead57af2f8277c7a802e3726d65a1bdd62c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_80b894ab554d28673e537fe7da2557ee0a98ea537939397fb4b78945706dc181->leave($__internal_80b894ab554d28673e537fe7da2557ee0a98ea537939397fb4b78945706dc181_prof);

        
        $__internal_0cf61a299a00eb49ddfe188c5c40ead57af2f8277c7a802e3726d65a1bdd62c4->leave($__internal_0cf61a299a00eb49ddfe188c5c40ead57af2f8277c7a802e3726d65a1bdd62c4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/var/www/html/MyJoob/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
