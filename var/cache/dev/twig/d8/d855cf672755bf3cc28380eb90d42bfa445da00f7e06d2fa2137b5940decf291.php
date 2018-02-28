<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_610e161c64e7ee6b618752f4c1b23e3cc9227c5012a219298dc637ff737af5ee extends Twig_Template
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
        $__internal_87662212b3321abbadfda6e541c85bfb6c460b34ff79d49c2cfc7ec34470e42b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87662212b3321abbadfda6e541c85bfb6c460b34ff79d49c2cfc7ec34470e42b->enter($__internal_87662212b3321abbadfda6e541c85bfb6c460b34ff79d49c2cfc7ec34470e42b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_18f6732282754ccf10f2fdc8c7b34e311f86a9465ff2471321a86ba963fa7f7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18f6732282754ccf10f2fdc8c7b34e311f86a9465ff2471321a86ba963fa7f7a->enter($__internal_18f6732282754ccf10f2fdc8c7b34e311f86a9465ff2471321a86ba963fa7f7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_87662212b3321abbadfda6e541c85bfb6c460b34ff79d49c2cfc7ec34470e42b->leave($__internal_87662212b3321abbadfda6e541c85bfb6c460b34ff79d49c2cfc7ec34470e42b_prof);

        
        $__internal_18f6732282754ccf10f2fdc8c7b34e311f86a9465ff2471321a86ba963fa7f7a->leave($__internal_18f6732282754ccf10f2fdc8c7b34e311f86a9465ff2471321a86ba963fa7f7a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/var/www/html/MyJoob/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
