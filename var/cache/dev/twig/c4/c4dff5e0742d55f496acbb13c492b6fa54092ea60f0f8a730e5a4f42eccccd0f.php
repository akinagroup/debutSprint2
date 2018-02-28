<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_c45389a3c6afed5b82b013aa519e89348be3c8b99eac700264cabf1b49dc0f77 extends Twig_Template
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
        $__internal_2a0c6a77a80136feff467f6c3f942c1ab59e50a0cd3a30b0016a9ba360fe6a67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a0c6a77a80136feff467f6c3f942c1ab59e50a0cd3a30b0016a9ba360fe6a67->enter($__internal_2a0c6a77a80136feff467f6c3f942c1ab59e50a0cd3a30b0016a9ba360fe6a67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_fc902f3cdcc94301ef3ef5c425a081aa288c4b42de4b4d262d0d5b60c8f80ceb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc902f3cdcc94301ef3ef5c425a081aa288c4b42de4b4d262d0d5b60c8f80ceb->enter($__internal_fc902f3cdcc94301ef3ef5c425a081aa288c4b42de4b4d262d0d5b60c8f80ceb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_2a0c6a77a80136feff467f6c3f942c1ab59e50a0cd3a30b0016a9ba360fe6a67->leave($__internal_2a0c6a77a80136feff467f6c3f942c1ab59e50a0cd3a30b0016a9ba360fe6a67_prof);

        
        $__internal_fc902f3cdcc94301ef3ef5c425a081aa288c4b42de4b4d262d0d5b60c8f80ceb->leave($__internal_fc902f3cdcc94301ef3ef5c425a081aa288c4b42de4b4d262d0d5b60c8f80ceb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/var/www/html/MyJoob/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
