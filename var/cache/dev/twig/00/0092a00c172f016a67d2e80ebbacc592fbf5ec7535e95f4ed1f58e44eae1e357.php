<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_e78fbc798b0922037b69de14d88bca4ba5ec1bb27a527c6afe0e1a7a10079381 extends Twig_Template
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
        $__internal_d184de7f41031518b336968ce651d4889fd4b6de256dee7e2b853e87bae10943 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d184de7f41031518b336968ce651d4889fd4b6de256dee7e2b853e87bae10943->enter($__internal_d184de7f41031518b336968ce651d4889fd4b6de256dee7e2b853e87bae10943_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_9bd44d5cc1f4c536ffb0888d946e9c0c08214c90e61f41e177c579742c9d6c8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bd44d5cc1f4c536ffb0888d946e9c0c08214c90e61f41e177c579742c9d6c8c->enter($__internal_9bd44d5cc1f4c536ffb0888d946e9c0c08214c90e61f41e177c579742c9d6c8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_d184de7f41031518b336968ce651d4889fd4b6de256dee7e2b853e87bae10943->leave($__internal_d184de7f41031518b336968ce651d4889fd4b6de256dee7e2b853e87bae10943_prof);

        
        $__internal_9bd44d5cc1f4c536ffb0888d946e9c0c08214c90e61f41e177c579742c9d6c8c->leave($__internal_9bd44d5cc1f4c536ffb0888d946e9c0c08214c90e61f41e177c579742c9d6c8c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/var/www/html/MyJoob/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
