<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_3468dfe36672c187955215b19fe680c9bf0caff931d8205011f39dd7584edf08 extends Twig_Template
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
        $__internal_15d87f682edc551e8515d550b8d92e94f372211a9a3fbaf46e44611fb898ea20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15d87f682edc551e8515d550b8d92e94f372211a9a3fbaf46e44611fb898ea20->enter($__internal_15d87f682edc551e8515d550b8d92e94f372211a9a3fbaf46e44611fb898ea20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_ecc6f80aa08bea1a56c6f9341b79c786c36e2c555e8b06cec2871aa140d8f298 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecc6f80aa08bea1a56c6f9341b79c786c36e2c555e8b06cec2871aa140d8f298->enter($__internal_ecc6f80aa08bea1a56c6f9341b79c786c36e2c555e8b06cec2871aa140d8f298_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_15d87f682edc551e8515d550b8d92e94f372211a9a3fbaf46e44611fb898ea20->leave($__internal_15d87f682edc551e8515d550b8d92e94f372211a9a3fbaf46e44611fb898ea20_prof);

        
        $__internal_ecc6f80aa08bea1a56c6f9341b79c786c36e2c555e8b06cec2871aa140d8f298->leave($__internal_ecc6f80aa08bea1a56c6f9341b79c786c36e2c555e8b06cec2871aa140d8f298_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/var/www/html/MyJoob/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
