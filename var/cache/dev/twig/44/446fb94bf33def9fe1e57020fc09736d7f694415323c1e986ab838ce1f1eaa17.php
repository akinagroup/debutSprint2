<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_556ad2bc098841e1e78ca55826f4cbcb75e36605135270233a29bf50608075aa extends Twig_Template
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
        $__internal_bcad6cf66ce91b50a95c2581cf14cdc256a9a762d8c66ca517242f8d0a1aeda1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bcad6cf66ce91b50a95c2581cf14cdc256a9a762d8c66ca517242f8d0a1aeda1->enter($__internal_bcad6cf66ce91b50a95c2581cf14cdc256a9a762d8c66ca517242f8d0a1aeda1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_383d5774f0f0cd0f9d2f5917676fee67216a2e723127318b27c4ebde5ddacf75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_383d5774f0f0cd0f9d2f5917676fee67216a2e723127318b27c4ebde5ddacf75->enter($__internal_383d5774f0f0cd0f9d2f5917676fee67216a2e723127318b27c4ebde5ddacf75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_bcad6cf66ce91b50a95c2581cf14cdc256a9a762d8c66ca517242f8d0a1aeda1->leave($__internal_bcad6cf66ce91b50a95c2581cf14cdc256a9a762d8c66ca517242f8d0a1aeda1_prof);

        
        $__internal_383d5774f0f0cd0f9d2f5917676fee67216a2e723127318b27c4ebde5ddacf75->leave($__internal_383d5774f0f0cd0f9d2f5917676fee67216a2e723127318b27c4ebde5ddacf75_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/attributes.html.php", "/var/www/html/MyJoob/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
