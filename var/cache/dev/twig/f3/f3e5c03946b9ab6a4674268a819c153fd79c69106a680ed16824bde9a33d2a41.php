<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_e36f3a7d339dd4eab0e60d00a71e9bca2cd1257406388137543e7aee43f243f2 extends Twig_Template
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
        $__internal_23571f338f876d52b10557ec6e1309fc4661289b45fdf4b51bf5bdd8ba5c967c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23571f338f876d52b10557ec6e1309fc4661289b45fdf4b51bf5bdd8ba5c967c->enter($__internal_23571f338f876d52b10557ec6e1309fc4661289b45fdf4b51bf5bdd8ba5c967c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_b13e342893e88f0c03b7fa6cae5436c87b0a5f3fdd1c482ea18a0cd760701ed7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b13e342893e88f0c03b7fa6cae5436c87b0a5f3fdd1c482ea18a0cd760701ed7->enter($__internal_b13e342893e88f0c03b7fa6cae5436c87b0a5f3fdd1c482ea18a0cd760701ed7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_23571f338f876d52b10557ec6e1309fc4661289b45fdf4b51bf5bdd8ba5c967c->leave($__internal_23571f338f876d52b10557ec6e1309fc4661289b45fdf4b51bf5bdd8ba5c967c_prof);

        
        $__internal_b13e342893e88f0c03b7fa6cae5436c87b0a5f3fdd1c482ea18a0cd760701ed7->leave($__internal_b13e342893e88f0c03b7fa6cae5436c87b0a5f3fdd1c482ea18a0cd760701ed7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "/var/www/html/MyJoob/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
