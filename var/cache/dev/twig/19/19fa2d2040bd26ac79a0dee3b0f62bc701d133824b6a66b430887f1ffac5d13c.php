<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_786ac36ddb651e00ce1a77b0b352c6de213b89e1e97cafa1e9e8cd64fca13a06 extends Twig_Template
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
        $__internal_d2faad060a02b3daf08ce5a2cbcbb2c8393f4bf2611ffb7c4796bfd597ac239e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2faad060a02b3daf08ce5a2cbcbb2c8393f4bf2611ffb7c4796bfd597ac239e->enter($__internal_d2faad060a02b3daf08ce5a2cbcbb2c8393f4bf2611ffb7c4796bfd597ac239e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_0eddac8a8048ecadfd33790f7db2ebe918fd3c9b061a0ee828dee8bfc5a17ddb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0eddac8a8048ecadfd33790f7db2ebe918fd3c9b061a0ee828dee8bfc5a17ddb->enter($__internal_0eddac8a8048ecadfd33790f7db2ebe918fd3c9b061a0ee828dee8bfc5a17ddb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, ($context["widget"] ?? $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_d2faad060a02b3daf08ce5a2cbcbb2c8393f4bf2611ffb7c4796bfd597ac239e->leave($__internal_d2faad060a02b3daf08ce5a2cbcbb2c8393f4bf2611ffb7c4796bfd597ac239e_prof);

        
        $__internal_0eddac8a8048ecadfd33790f7db2ebe918fd3c9b061a0ee828dee8bfc5a17ddb->leave($__internal_0eddac8a8048ecadfd33790f7db2ebe918fd3c9b061a0ee828dee8bfc5a17ddb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/var/www/html/MyJoob/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
