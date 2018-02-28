<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_8641f7339e30ce6cf1d0c54497fc27d38cc561a51f2b62719694aa0d66580955 extends Twig_Template
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
        $__internal_acaa9787285280db98a48a4d2feee7aea75252dc3c19ecbdf86707cb0dc37bb5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_acaa9787285280db98a48a4d2feee7aea75252dc3c19ecbdf86707cb0dc37bb5->enter($__internal_acaa9787285280db98a48a4d2feee7aea75252dc3c19ecbdf86707cb0dc37bb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_d26b1ca3f768f02172a6e42759448724c14f965a662bf3dc9a9a89536b76972c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d26b1ca3f768f02172a6e42759448724c14f965a662bf3dc9a9a89536b76972c->enter($__internal_d26b1ca3f768f02172a6e42759448724c14f965a662bf3dc9a9a89536b76972c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_acaa9787285280db98a48a4d2feee7aea75252dc3c19ecbdf86707cb0dc37bb5->leave($__internal_acaa9787285280db98a48a4d2feee7aea75252dc3c19ecbdf86707cb0dc37bb5_prof);

        
        $__internal_d26b1ca3f768f02172a6e42759448724c14f965a662bf3dc9a9a89536b76972c->leave($__internal_d26b1ca3f768f02172a6e42759448724c14f965a662bf3dc9a9a89536b76972c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "/var/www/html/MyJoob/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
