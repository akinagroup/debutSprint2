<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_b9a10de858ea2c04f5a6698327125a57998e36281ec501b6a0e5cc0ccfc89828 extends Twig_Template
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
        $__internal_0f3cd30bcb73a239c21f50e775ecfa804a17b655de2eed9da279742ebcf2458f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f3cd30bcb73a239c21f50e775ecfa804a17b655de2eed9da279742ebcf2458f->enter($__internal_0f3cd30bcb73a239c21f50e775ecfa804a17b655de2eed9da279742ebcf2458f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_ddf045ba32d85a914fb9a6230b504a5435be2b1a497c7a15639ceb73da11491e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddf045ba32d85a914fb9a6230b504a5435be2b1a497c7a15639ceb73da11491e->enter($__internal_ddf045ba32d85a914fb9a6230b504a5435be2b1a497c7a15639ceb73da11491e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_0f3cd30bcb73a239c21f50e775ecfa804a17b655de2eed9da279742ebcf2458f->leave($__internal_0f3cd30bcb73a239c21f50e775ecfa804a17b655de2eed9da279742ebcf2458f_prof);

        
        $__internal_ddf045ba32d85a914fb9a6230b504a5435be2b1a497c7a15639ceb73da11491e->leave($__internal_ddf045ba32d85a914fb9a6230b504a5435be2b1a497c7a15639ceb73da11491e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/var/www/html/MyJoob/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
