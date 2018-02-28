<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_9085894e1e0333fa375daf1dc0976d7eeae66f05f568b26355eb277dd9bdad38 extends Twig_Template
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
        $__internal_c359b53495a86b7b18e07e546cc9a8add310d11c370ddeaa817f67a7a3d76a9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c359b53495a86b7b18e07e546cc9a8add310d11c370ddeaa817f67a7a3d76a9d->enter($__internal_c359b53495a86b7b18e07e546cc9a8add310d11c370ddeaa817f67a7a3d76a9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_83c968ed42191872148dc754a9f17287b1f28df91d7eee01a5aa1b3a1edf848a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83c968ed42191872148dc754a9f17287b1f28df91d7eee01a5aa1b3a1edf848a->enter($__internal_83c968ed42191872148dc754a9f17287b1f28df91d7eee01a5aa1b3a1edf848a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_c359b53495a86b7b18e07e546cc9a8add310d11c370ddeaa817f67a7a3d76a9d->leave($__internal_c359b53495a86b7b18e07e546cc9a8add310d11c370ddeaa817f67a7a3d76a9d_prof);

        
        $__internal_83c968ed42191872148dc754a9f17287b1f28df91d7eee01a5aa1b3a1edf848a->leave($__internal_83c968ed42191872148dc754a9f17287b1f28df91d7eee01a5aa1b3a1edf848a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/var/www/html/MyJoob/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
