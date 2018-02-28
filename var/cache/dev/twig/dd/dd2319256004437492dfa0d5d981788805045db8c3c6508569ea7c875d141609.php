<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_60432b9af49585ac38906f7098c78a6eb37236afb4e2059d43161de0d0317d08 extends Twig_Template
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
        $__internal_bac9adfce85c37b454baf9bf2bc7eee0b4b6e1c80d2f0ed8d1b203df34215e4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bac9adfce85c37b454baf9bf2bc7eee0b4b6e1c80d2f0ed8d1b203df34215e4d->enter($__internal_bac9adfce85c37b454baf9bf2bc7eee0b4b6e1c80d2f0ed8d1b203df34215e4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_13816adaf1521fdbdd958695cbbcd895906256117f06274dacd66c3035cb6a4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13816adaf1521fdbdd958695cbbcd895906256117f06274dacd66c3035cb6a4a->enter($__internal_13816adaf1521fdbdd958695cbbcd895906256117f06274dacd66c3035cb6a4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_bac9adfce85c37b454baf9bf2bc7eee0b4b6e1c80d2f0ed8d1b203df34215e4d->leave($__internal_bac9adfce85c37b454baf9bf2bc7eee0b4b6e1c80d2f0ed8d1b203df34215e4d_prof);

        
        $__internal_13816adaf1521fdbdd958695cbbcd895906256117f06274dacd66c3035cb6a4a->leave($__internal_13816adaf1521fdbdd958695cbbcd895906256117f06274dacd66c3035cb6a4a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/var/www/html/MyJoob/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
