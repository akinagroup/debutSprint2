<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_b3e255f781cc92092967736c328ac6f52fed45d8f9c17e0cb72f47fb6ed8e8d1 extends Twig_Template
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
        $__internal_4f6a715c2ab58df9d6b3f7c2eada605c50749b04d60a80b92b69e1992ee40248 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f6a715c2ab58df9d6b3f7c2eada605c50749b04d60a80b92b69e1992ee40248->enter($__internal_4f6a715c2ab58df9d6b3f7c2eada605c50749b04d60a80b92b69e1992ee40248_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        $__internal_85ebb58ba810af84ab3b9fdf4912eeb47bcc17c4ad78f7b55793dd76eb904dc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85ebb58ba810af84ab3b9fdf4912eeb47bcc17c4ad78f7b55793dd76eb904dc4->enter($__internal_85ebb58ba810af84ab3b9fdf4912eeb47bcc17c4ad78f7b55793dd76eb904dc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper {
    min-height: auto;
}
";
        
        $__internal_4f6a715c2ab58df9d6b3f7c2eada605c50749b04d60a80b92b69e1992ee40248->leave($__internal_4f6a715c2ab58df9d6b3f7c2eada605c50749b04d60a80b92b69e1992ee40248_prof);

        
        $__internal_85ebb58ba810af84ab3b9fdf4912eeb47bcc17c4ad78f7b55793dd76eb904dc4->leave($__internal_85ebb58ba810af84ab3b9fdf4912eeb47bcc17c4ad78f7b55793dd76eb904dc4_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.css.twig";
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
        return new Twig_Source("{{ include('@Twig/exception.css.twig') }}

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper {
    min-height: auto;
}
", "WebProfilerBundle:Collector:exception.css.twig", "/var/www/html/MyJoob/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.css.twig");
    }
}
