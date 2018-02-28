<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_5d16d23860f1dc0a7de9576dd6c23b03d645e85a40adf8f4bf5a6d5580e9c9c2 extends Twig_Template
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
        $__internal_39e241b5a0df1d7b8ba4041d6dde26c81900cb54a5449019477f4483798e77b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39e241b5a0df1d7b8ba4041d6dde26c81900cb54a5449019477f4483798e77b8->enter($__internal_39e241b5a0df1d7b8ba4041d6dde26c81900cb54a5449019477f4483798e77b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_aa28cd2407ba1933e7b7dd38f2870f57783242463fe996a850782a7cdccd96e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa28cd2407ba1933e7b7dd38f2870f57783242463fe996a850782a7cdccd96e6->enter($__internal_aa28cd2407ba1933e7b7dd38f2870f57783242463fe996a850782a7cdccd96e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_39e241b5a0df1d7b8ba4041d6dde26c81900cb54a5449019477f4483798e77b8->leave($__internal_39e241b5a0df1d7b8ba4041d6dde26c81900cb54a5449019477f4483798e77b8_prof);

        
        $__internal_aa28cd2407ba1933e7b7dd38f2870f57783242463fe996a850782a7cdccd96e6->leave($__internal_aa28cd2407ba1933e7b7dd38f2870f57783242463fe996a850782a7cdccd96e6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/var/www/html/MyJoob/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
