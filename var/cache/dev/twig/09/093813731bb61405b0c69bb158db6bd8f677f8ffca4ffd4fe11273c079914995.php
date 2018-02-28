<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_2f3c90c1441ccd05138df916241a9995528af917dd789b9de6f4d2dfaf38f72c extends Twig_Template
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
        $__internal_43048d43fa534300d04e498ce422b2ef0f20fc3962c235455f96af31d70760f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43048d43fa534300d04e498ce422b2ef0f20fc3962c235455f96af31d70760f6->enter($__internal_43048d43fa534300d04e498ce422b2ef0f20fc3962c235455f96af31d70760f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_54dabc7ba3ad0722e84bbfb384d6ec581098bade026694333a6f942acb8d492e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54dabc7ba3ad0722e84bbfb384d6ec581098bade026694333a6f942acb8d492e->enter($__internal_54dabc7ba3ad0722e84bbfb384d6ec581098bade026694333a6f942acb8d492e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_43048d43fa534300d04e498ce422b2ef0f20fc3962c235455f96af31d70760f6->leave($__internal_43048d43fa534300d04e498ce422b2ef0f20fc3962c235455f96af31d70760f6_prof);

        
        $__internal_54dabc7ba3ad0722e84bbfb384d6ec581098bade026694333a6f942acb8d492e->leave($__internal_54dabc7ba3ad0722e84bbfb384d6ec581098bade026694333a6f942acb8d492e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/var/www/html/MyJoob/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
