<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_9aefff5be174006e81c62c6da32d22e88681f7b79e638c3ba32f2cd4504c5849 extends Twig_Template
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
        $__internal_016586fa57d336e3c80528d3ff73f40e4aa61dd49fe22c1b4f727f5e8d707795 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_016586fa57d336e3c80528d3ff73f40e4aa61dd49fe22c1b4f727f5e8d707795->enter($__internal_016586fa57d336e3c80528d3ff73f40e4aa61dd49fe22c1b4f727f5e8d707795_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_549c8202bd2011d34173d66b749f431bcf56c1555f0e807ed030ffd1872f6a90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_549c8202bd2011d34173d66b749f431bcf56c1555f0e807ed030ffd1872f6a90->enter($__internal_549c8202bd2011d34173d66b749f431bcf56c1555f0e807ed030ffd1872f6a90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_016586fa57d336e3c80528d3ff73f40e4aa61dd49fe22c1b4f727f5e8d707795->leave($__internal_016586fa57d336e3c80528d3ff73f40e4aa61dd49fe22c1b4f727f5e8d707795_prof);

        
        $__internal_549c8202bd2011d34173d66b749f431bcf56c1555f0e807ed030ffd1872f6a90->leave($__internal_549c8202bd2011d34173d66b749f431bcf56c1555f0e807ed030ffd1872f6a90_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/var/www/html/MyJoob/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
