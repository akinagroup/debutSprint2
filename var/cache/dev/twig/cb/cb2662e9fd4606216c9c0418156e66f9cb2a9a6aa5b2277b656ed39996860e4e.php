<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_5f168c0648556bde3d1cd2f71cc31010445b6bbfe428411b0c8c13f628eb900a extends Twig_Template
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
        $__internal_66f51d96518f35b0ff64c0e2ea0a6c88a820b8cdbc7f02e12e4747e9b6eb6192 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66f51d96518f35b0ff64c0e2ea0a6c88a820b8cdbc7f02e12e4747e9b6eb6192->enter($__internal_66f51d96518f35b0ff64c0e2ea0a6c88a820b8cdbc7f02e12e4747e9b6eb6192_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_fccbd45171b5770a56ea7922c9ffa1b2c45896d97a255b8bfa42d3ea5f509246 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fccbd45171b5770a56ea7922c9ffa1b2c45896d97a255b8bfa42d3ea5f509246->enter($__internal_fccbd45171b5770a56ea7922c9ffa1b2c45896d97a255b8bfa42d3ea5f509246_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_66f51d96518f35b0ff64c0e2ea0a6c88a820b8cdbc7f02e12e4747e9b6eb6192->leave($__internal_66f51d96518f35b0ff64c0e2ea0a6c88a820b8cdbc7f02e12e4747e9b6eb6192_prof);

        
        $__internal_fccbd45171b5770a56ea7922c9ffa1b2c45896d97a255b8bfa42d3ea5f509246->leave($__internal_fccbd45171b5770a56ea7922c9ffa1b2c45896d97a255b8bfa42d3ea5f509246_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/var/www/html/MyJoob/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
