<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_89515960a203fa69762a93f738f7e268a79d974e7fca67e4308416013f6dee07 extends Twig_Template
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
        $__internal_3b70048af79f9e8d1b511375293e8407a78c947456477ed4180aaf80b21dbfed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b70048af79f9e8d1b511375293e8407a78c947456477ed4180aaf80b21dbfed->enter($__internal_3b70048af79f9e8d1b511375293e8407a78c947456477ed4180aaf80b21dbfed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_a4159955c41fc22fcbd95a78fe761ab095642c8ce2a9e39f0e198217c39f4e80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4159955c41fc22fcbd95a78fe761ab095642c8ce2a9e39f0e198217c39f4e80->enter($__internal_a4159955c41fc22fcbd95a78fe761ab095642c8ce2a9e39f0e198217c39f4e80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_3b70048af79f9e8d1b511375293e8407a78c947456477ed4180aaf80b21dbfed->leave($__internal_3b70048af79f9e8d1b511375293e8407a78c947456477ed4180aaf80b21dbfed_prof);

        
        $__internal_a4159955c41fc22fcbd95a78fe761ab095642c8ce2a9e39f0e198217c39f4e80->leave($__internal_a4159955c41fc22fcbd95a78fe761ab095642c8ce2a9e39f0e198217c39f4e80_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/var/www/html/MyJoob/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
