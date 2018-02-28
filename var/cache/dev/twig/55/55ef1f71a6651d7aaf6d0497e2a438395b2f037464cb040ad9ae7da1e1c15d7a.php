<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_00b802fceccb2c86ed27f7093ec70fe311e83aebb36ff297ad48d487b9ec45cb extends Twig_Template
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
        $__internal_f7c121969550c303bcdc0e6d2a90ee606cd2c7d1e229bcc6753021bd5382f53f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7c121969550c303bcdc0e6d2a90ee606cd2c7d1e229bcc6753021bd5382f53f->enter($__internal_f7c121969550c303bcdc0e6d2a90ee606cd2c7d1e229bcc6753021bd5382f53f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_b31b5c427d076128f344cad56e4570f95c0a2bc1669f715c75550de559d1b0bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b31b5c427d076128f344cad56e4570f95c0a2bc1669f715c75550de559d1b0bd->enter($__internal_b31b5c427d076128f344cad56e4570f95c0a2bc1669f715c75550de559d1b0bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_f7c121969550c303bcdc0e6d2a90ee606cd2c7d1e229bcc6753021bd5382f53f->leave($__internal_f7c121969550c303bcdc0e6d2a90ee606cd2c7d1e229bcc6753021bd5382f53f_prof);

        
        $__internal_b31b5c427d076128f344cad56e4570f95c0a2bc1669f715c75550de559d1b0bd->leave($__internal_b31b5c427d076128f344cad56e4570f95c0a2bc1669f715c75550de559d1b0bd_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.css.twig", "/var/www/html/MyJoob/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
