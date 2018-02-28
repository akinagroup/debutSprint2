<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_6c0344178c221365029f4005346b40625d1e9a4c50185fb8bb1d341731b379dc extends Twig_Template
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
        $__internal_7d7312b2186f8e0a297271308e80ac2075bef3f71f11ab2755e1912901b92cc4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d7312b2186f8e0a297271308e80ac2075bef3f71f11ab2755e1912901b92cc4->enter($__internal_7d7312b2186f8e0a297271308e80ac2075bef3f71f11ab2755e1912901b92cc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_a72a3ce377f268d6901427d53660228ab6dab988c23c37ed02ef67ba5e71a465 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a72a3ce377f268d6901427d53660228ab6dab988c23c37ed02ef67ba5e71a465->enter($__internal_a72a3ce377f268d6901427d53660228ab6dab988c23c37ed02ef67ba5e71a465_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_7d7312b2186f8e0a297271308e80ac2075bef3f71f11ab2755e1912901b92cc4->leave($__internal_7d7312b2186f8e0a297271308e80ac2075bef3f71f11ab2755e1912901b92cc4_prof);

        
        $__internal_a72a3ce377f268d6901427d53660228ab6dab988c23c37ed02ef67ba5e71a465->leave($__internal_a72a3ce377f268d6901427d53660228ab6dab988c23c37ed02ef67ba5e71a465_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/var/www/html/MyJoob/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
