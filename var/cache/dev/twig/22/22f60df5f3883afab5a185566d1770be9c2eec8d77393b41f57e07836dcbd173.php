<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_5b00e3548b0740974f73f6a97ac11f9a270cc262343b443e91752c278b29f82d extends Twig_Template
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
        $__internal_022d74c1c644d8cd227ed94050eb30269c3d79688133649788242bce98c22411 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_022d74c1c644d8cd227ed94050eb30269c3d79688133649788242bce98c22411->enter($__internal_022d74c1c644d8cd227ed94050eb30269c3d79688133649788242bce98c22411_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_6b277b327b538344c0c6c452b2e00481fccc612187ceb9339870aad30d7ea41a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b277b327b538344c0c6c452b2e00481fccc612187ceb9339870aad30d7ea41a->enter($__internal_6b277b327b538344c0c6c452b2e00481fccc612187ceb9339870aad30d7ea41a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_022d74c1c644d8cd227ed94050eb30269c3d79688133649788242bce98c22411->leave($__internal_022d74c1c644d8cd227ed94050eb30269c3d79688133649788242bce98c22411_prof);

        
        $__internal_6b277b327b538344c0c6c452b2e00481fccc612187ceb9339870aad30d7ea41a->leave($__internal_6b277b327b538344c0c6c452b2e00481fccc612187ceb9339870aad30d7ea41a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/var/www/html/MyJoob/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
