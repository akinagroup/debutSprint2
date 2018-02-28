<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_462a41b9361b0805ca3df08eb29fa13ffe3eda3b38da9da63cf31fdabe4ad94e extends Twig_Template
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
        $__internal_628a33da98f24accdba80ecfdddde98e047daf0fdef6c599f44e0f219aaf3d19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_628a33da98f24accdba80ecfdddde98e047daf0fdef6c599f44e0f219aaf3d19->enter($__internal_628a33da98f24accdba80ecfdddde98e047daf0fdef6c599f44e0f219aaf3d19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_12573648a04da24399672558594549fd7e47c3c87c52963602abb14c296cead3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12573648a04da24399672558594549fd7e47c3c87c52963602abb14c296cead3->enter($__internal_12573648a04da24399672558594549fd7e47c3c87c52963602abb14c296cead3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_628a33da98f24accdba80ecfdddde98e047daf0fdef6c599f44e0f219aaf3d19->leave($__internal_628a33da98f24accdba80ecfdddde98e047daf0fdef6c599f44e0f219aaf3d19_prof);

        
        $__internal_12573648a04da24399672558594549fd7e47c3c87c52963602abb14c296cead3->leave($__internal_12573648a04da24399672558594549fd7e47c3c87c52963602abb14c296cead3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/var/www/html/MyJoob/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
