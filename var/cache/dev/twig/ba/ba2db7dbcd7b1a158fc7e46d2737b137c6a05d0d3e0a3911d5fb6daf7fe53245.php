<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_f7d2d171fce3c8619f5354b5da0e5895d3283bb0dcee7eeabdea38807ddd5d54 extends Twig_Template
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
        $__internal_609c374e3e530dd988178d0a99b19bb71189fbfd43ba4e2b24231f4d5a33c6b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_609c374e3e530dd988178d0a99b19bb71189fbfd43ba4e2b24231f4d5a33c6b9->enter($__internal_609c374e3e530dd988178d0a99b19bb71189fbfd43ba4e2b24231f4d5a33c6b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_58b5ec92eb5e140531361bcf009eb602ba4d3431536ddefe571c79b587c3e74f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58b5ec92eb5e140531361bcf009eb602ba4d3431536ddefe571c79b587c3e74f->enter($__internal_58b5ec92eb5e140531361bcf009eb602ba4d3431536ddefe571c79b587c3e74f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_609c374e3e530dd988178d0a99b19bb71189fbfd43ba4e2b24231f4d5a33c6b9->leave($__internal_609c374e3e530dd988178d0a99b19bb71189fbfd43ba4e2b24231f4d5a33c6b9_prof);

        
        $__internal_58b5ec92eb5e140531361bcf009eb602ba4d3431536ddefe571c79b587c3e74f->leave($__internal_58b5ec92eb5e140531361bcf009eb602ba4d3431536ddefe571c79b587c3e74f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/var/www/html/MyJoob/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
